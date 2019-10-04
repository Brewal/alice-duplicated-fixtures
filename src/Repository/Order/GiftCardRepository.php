<?php

namespace App\Repository\Order;

use App\Entity\Order\GiftCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GiftCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method GiftCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method GiftCard[]    findAll()
 * @method GiftCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiftCardRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GiftCard::class);
    }

    // /**
    //  * @return GiftCard[] Returns an array of GiftCard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GiftCard
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
