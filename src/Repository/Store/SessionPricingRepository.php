<?php

namespace App\Repository\Store;

use App\Entity\Store\SessionPricing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SessionPricing|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionPricing|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionPricing[]    findAll()
 * @method SessionPricing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionPricingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SessionPricing::class);
    }

    // /**
    //  * @return SessionPricing[] Returns an array of SessionPricing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SessionPricing
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
