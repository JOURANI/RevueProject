<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }



//    /**
//     * @param $id
//     * @return mixed
//     */
//    public function SelectArticleAuthors2(int $id)
//    {
//        return $this->createQueryBuilder('a')
////            ->andWhere('g.id = : Id')
//            ->select('g.id, g.nom_auteur,g.prenom_auteur')
//            ->innerJoin('group', 'ga')
//
//            ->join("")
//            ->setParameter('Id', $id)
//            ->getQuery()
//            ->getResult();
//        ;
//    }


//$qb = $this->createQueryBuilder('post')
//->select('post.id, post.title, post.author_id, post.content, post.datetime, post.tile')
//->innerJoin('post.tag', 't')
//->where('t.id = :tagid')
//->setParameter('tagid', $tag_id)
//;


//$qb->select('c')
//->innerJoin('c.phones', 'p', Join::ON, 'c.id = p.customerId')
//->where('c.username = :username')
//->andWhere('p.phone = :phone');
//
//$qb->setParameters(array(
//'username' => $username,
//'phone' => $phone->getPhone(),
//));

//$classes = $this->qb
//->add('select', 'exp_cls,exp_loc.id as location_id')
//->from('Entity\expert_class','exp_cls')
//->join('Entity\expert_location', 'exp_loc')
//->join('Entity\expert', 'exp')
//->where('exp_cls.expert_id = exp.id')
//->AndWhere('exp_cls.expert_id = exp_loc.expert_id')
//->AndWhere('exp.is_delete = 0')
//->getQuery()
//->getArrayResult();

















    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
