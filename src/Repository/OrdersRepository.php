<?php

namespace App\Repository;

use App\Entity\Orders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Orders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orders[]    findAll()
 * @method Orders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Orders::class);
    }

public function myOrders(int $id){
        return $this->createQueryBuilder('p')
            ->select('p.idpack as pack')
            ->where('p.iduser = :idUser')
            ->setParameter('idUser', $id)
            ->getQuery()->getResult();
}
public function deleteOrder(int $id){
      $this->createQueryBuilder('o')
    ->delete()
    ->where('o.idpack = :idPack')
    ->setParameter('idPack', $id)
      ->getQuery()->getResult();
}
    public function countOrdersByStatus()
    {
        return $this->createQueryBuilder('p')
            ->select('count(p.id) as nombre', 'p.status as status')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();
    }
}