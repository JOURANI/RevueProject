<?php

namespace App\Repository;

use App\Entity\GroupAuteur;
use App\Entity\GroupeAuteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupeAuteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupeAuteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupeAuteur[]    findAll()
 * @method GroupeAuteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupeAuteurRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManager
     */
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, GroupeAuteur::class);
        $this->manager = $manager;
    }

//      $queryBuilder->innerJoin(
//      Project::class,    // Entity
//      'p',               // Alias
//      Join::WITH,        // Join type
//      'p.id = c.project' // Join columns
//      );


    /**
     * @param int $id
     * @return mixed
     */
    public function SelectArticleAuthors(int $id)
    {
        return $this->createQueryBuilder('ga')
                  ->innerJoin('ga.articles','a','WITH','a.id=:id')
                  ->setParameter('id', $id)
                  ->getQuery()->getResult();
        //////////////////////////////////////////////////////////////////
        ///                   implement this methode too               ///
        //////////////////////////////////////////////////////////////////
        // Link : https://stackoverflow.com/a/10040940/14004679
        //   $this->createQueryBuilder()
        //    ->select('s')
        //    ->from('SuperCategory', 's')
        //    ->innerJoin('s.Category c ON c.category_id = s.superCategory_id')
        //    ->where('s.name = :superCategoryName')
        //    ->setParameter('superCategoryName', $superCategoryName)
        //    ->getQuery()
        //    ->getResult();
        //////////////////////////////////////////////////////////////////

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
