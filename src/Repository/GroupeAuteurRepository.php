<?php

namespace App\Repository;

use App\Entity\GroupeAuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupeAuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupeAuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupeAuteur[]    findAll()
 * @method GroupeAuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupeAuteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupeAuteur::class);
    }

    // /**
    //  * @return GroupeAuteur[] Returns an array of GroupeAuteur objects
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
    public function findOneBySomeField($value): ?GroupeAuteur
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
