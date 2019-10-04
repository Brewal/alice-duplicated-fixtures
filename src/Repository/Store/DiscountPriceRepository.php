<?php

namespace App\Repository\Store;

use App\Entity\Store\DiscountPrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DiscountPrice|null find($id, $lockMode = null, $lockVersion = null)
 * @method DiscountPrice|null findOneBy(array $criteria, array $orderBy = null)
 * @method DiscountPrice[]    findAll()
 * @method DiscountPrice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiscountPriceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DiscountPrice::class);
    }

    // /**
    //  * @return DiscountPrice[] Returns an array of DiscountPrice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DiscountPrice
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
