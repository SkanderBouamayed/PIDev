<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Form\PackType;
use App\Repository\OrdersRepository;
use App\Repository\PackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/pack")
 */
class PackController extends AbstractController
{
    /**
     * @Route("/api/index", name="api_pack_index", methods={"GET"})
     */
    public function showAll(){
        $packs = $this->getDoctrine()->getRepository(Pack::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/api/allPacks", name="api_pack_allPacks")
     */
    public function showOtherPacks(PackRepository $packRepository, OrdersRepository $ordersRepository, Request $request) {
        $packs = $packRepository->notMyPacks($request->get('idUser'), $ordersRepository);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
        }
    /**
     * @Route("/api/myPacks", name="api_pack_myPack")
     */
    public function showMyPacks(PackRepository $packRepository, OrdersRepository $ordersRepository, Request $request) {
        $packs = $packRepository->MyPacks($request->get('idUser'), $ordersRepository);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/api/packs/accepted", name="api_pack_accepted")
     */
    public function showAcceptedPacks(PackRepository $packRepository, OrdersRepository $ordersRepository, Request $request) {
        $packs = $packRepository->getMyPacks($request->get('idUser'), "Accepted",$ordersRepository);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/api/packs/declined", name="api_pack_declined")
     */
    public function showDeclinedPacks(PackRepository $packRepository, OrdersRepository $ordersRepository, Request $request) {
        $packs = $packRepository->getMyPacks($request->get('idUser'), "Declined",$ordersRepository);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
    }
    /**
 * @Route("/api/packs/pending", name="api_pack_pending")
 */
    public function showPendingPacks(PackRepository $packRepository, OrdersRepository $ordersRepository , Request $request) {
        $packs = $packRepository->getMyPacks($request->get('idUser'), "Pending",$ordersRepository);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($packs);
        return new JsonResponse($formatted);
    }


    /**
     * @Route("/index", name="pack_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $pack = $this->getDoctrine()
            ->getRepository(Pack::class)
            ->findAll();
        $packs = $paginator->paginate(
        // Doctrine Query, not results
            $pack,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );

        return $this->render('pack/index.html.twig', [
            'packs' => $packs,
        ]);
    }
    /**
     * @Route("/pdf", name="pack_pdf", methods={"GET"})
     */
    public function pdf(): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);

        $packs = $this->getDoctrine()
            ->getRepository(Pack::class)
            ->findAll();


        $html = $this->render('pack/pdf.html.twig', [
            'packs' => $packs,
        ]);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/front", name="pack_index_front", methods={"GET"})
     */
    public function frontIndex(): Response
    {
        $packs = $this->getDoctrine()
            ->getRepository(Pack::class)
            ->findAll();

        return $this->render('pack/front_index.html.twig', [
            'packs' => $packs,
        ]);
    }
    /**
     * @Route("/front/myPacks", name="myPack_index")
     */
    public function myPackShow(PackRepository $packRepository, OrdersRepository $ordersRepository): Response {
     $packs = $packRepository->myPacks(6, $ordersRepository);
        return $this->render('pack/front_index_myPacks.html.twig', [
            'packs' => $packs,
        ]);
    }

    /**
     * @Route("/indexPrix", name="pack_index_prix", methods={"GET"})
     */
    public function orderedPriceShow(Request $request, PaginatorInterface $paginator):Response{
        $pack =  $this->getDoctrine()->getRepository(Pack::class)->findBy(
            array(),
            array('prix' => 'ASC')
        );
        $packs =  $paginator->paginate(
// Doctrine Query, not results
            $pack,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('pack/index.html.twig', [
            'packs' => $packs,
        ]);
    }
    /**
     * @Route("/indexName", name="pack_index_name", methods={"GET"})
     */
    public function orderedNameShow(Request $request, PaginatorInterface $paginator):Response{
        $pack =  $this->getDoctrine()->getRepository(Pack::class)->findBy(
            array(),
            array('nom' => 'ASC')
        );
        $packs =  $paginator->paginate(
// Doctrine Query, not results
            $pack,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('pack/index.html.twig', [
            'packs' => $packs,
        ]);
    }

    /**
     * @Route("/new", name="pack_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pack = new Pack();
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pack);
            $entityManager->flush();

            return $this->redirectToRoute('pack_index');
        }

        return $this->render('pack/new.html.twig', [
            'pack' => $pack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pack_show", methods={"GET"})
     */
    public function show(Pack $pack): Response
    {
        return $this->render('pack/show.html.twig', [
            'pack' => $pack,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pack_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pack $pack): Response
    {
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pack_index');
        }

        return $this->render('pack/edit.html.twig', [
            'pack' => $pack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pack_delete", methods={"POST"})
     */
    public function delete(Request $request, Pack $pack): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pack->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pack);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pack_index');
    }

}
