<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Pack;
use App\Form\OrdersType;
use App\Repository\OrdersRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/orders")
 */
class OrdersController extends AbstractController
{
    /**
     * @Route ("/front", name="orders_index_front", methods={"GET"})
     */
    public function indexFront():Response{

        return $this->render('orders/front_index.html.twig', [
           // 'packs' => $packs,
        ]);

        // returns an array of Product objects

    }
    /**
     * @Route("/front/buy{id}", name="orders_add_front")
     */
    public function addOrder(int $id): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $order = new Orders();
        $order->setStatus('Pending');
        $order->setIdpack($id);
        $order->setIduser(6);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($order);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->redirectToRoute('pack_index_front');
    }

    /**
     * @Route("/front/remove{id}", name="orders_remove_front")
     */
    public function removeOrder(int $id): Response
    {

        return $this->redirectToRoute('orders_index_front');
    }

    /**
     * @Route("/", name="orders_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator, OrdersRepository $ordersRepository): Response
    {
        $order = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->findAll();

$orders = $paginator->paginate(
// Doctrine Query, not results
    $order,
    // Define the page parameter
    $request->query->getInt('page', 1),
    // Items per page
    5
);
        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
            'counts' => $ordersRepository->countOrdersByStatus()
        ]);
    }
    /**
     * @Route("/indexPack", name="order_index_pack", methods={"GET"})
     */
    public function orderedPackShow(Request $request, PaginatorInterface $paginator, OrdersRepository $ordersRepository):Response{
        $order =  $this->getDoctrine()->getRepository(Orders::class)->findBy(
            array(),
            array('idpack' => 'DESC')
        );
        $orders =  $paginator->paginate(
// Doctrine Query, not results
            $order,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
            'counts' => $ordersRepository->countOrdersByStatus()
        ]);
    }
    /**
     * @Route("/indexStatus", name="order_index_status", methods={"GET"})
     */
    public function orderedStatusShow(Request $request, PaginatorInterface $paginator, OrdersRepository $ordersRepository):Response{
        $order =  $this->getDoctrine()->getRepository(Orders::class)->findBy(
            array(),
            array('status' => 'ASC')
        );
        $orders =  $paginator->paginate(
// Doctrine Query, not results
            $order,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            5
        );
        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
            'counts' => $ordersRepository->countOrdersByStatus()
        ]);
    }
    /**
     * @Route("/pdf", name="order_pdf", methods={"GET"})
     */
    public function pdf(): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);

        $orders = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->findAll();


        $html = $this->render('orders/pdf.html.twig', [
            'orders' => $orders,
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
     * @Route("/accept/{id}", name="orders_accepted", methods={"GET" , "POST"})
     */
    public function acceptOrder(int $id): Response
    {
        $order= $this->getDoctrine()->getRepository(Orders::class)->find($id);
        $order->setStatus("Accepted");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $entityManager->flush();
        return $this->redirectToRoute('orders_index');
    }
    /**
     * @Route("/decline/{id}", name="orders_declined", methods={"GET" , "POST"})
     */
    public function declineOrder(int $id): Response
    {
        $order= $this->getDoctrine()->getRepository(Orders::class)->find($id);
        $order->setStatus("Declined");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $entityManager->flush();
        return $this->redirectToRoute('orders_index');
    }
    /**
     * @Route("/new", name="orders_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $order = new Orders();
        $form = $this->createForm(OrdersType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->redirectToRoute('orders_index');
        }

        return $this->render('orders/new.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="orders_show", methods={"GET"})
     */
    public function show(Orders $order): Response
    {
        return $this->render('orders/show.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="orders_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Orders $order): Response
    {
        $form = $this->createForm(OrdersType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_index');
        }

        return $this->render('orders/edit.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="orders_delete", methods={"POST"})
     */
    public function delete(Request $request, Orders $order): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('orders_index');
    }
}
