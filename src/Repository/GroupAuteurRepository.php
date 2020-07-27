<?php

namespace App\Repository;

use App\Entity\GroupAuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupAuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupAuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupAuteur[]    findAll()
 * @method GroupAuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupAuteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupAuteur::class);
    }

    // /**
    //  * @return GroupAuteur[] Returns an array of GroupAuteur objects
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
    public function findOneBySomeField($value): ?GroupAuteur
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
