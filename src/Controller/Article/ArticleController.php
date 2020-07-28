<?php

namespace App\Controller\Article;

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("", name="article-index")
     */
    public function index()
    {
        return $this->render('Article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/create",name="article-new")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function newArticle(Request $request,EntityManagerInterface $manager):Response
    {
        $article =new Article();
        $formArticle = $this->createForm(ArticleType::class,$article);
        $formArticle->handleRequest($request);

        if($formArticle->isSubmitted() && $formArticle->isValid() )
        {
            foreach ($article->getAuteurs() as $auteur) {
                $auteur->setUser($this->getUser());
            }
            $article->setUser($this->getUser());
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute("groupAuteur-new");
        }

        return $this->render('Article/addNew.html.twig',[
            'formArticle' => $formArticle->createView(),
            'article'=> $article
        ]);
    }

    /**
     * @Route("/add", name="article-add")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function add(Request $request,EntityManagerInterface $manager):Response
    {
        $article =new Article();
        $formArticle = $this->createForm(ArticleType::class,$article);
        $formArticle->handleRequest($request);

        if($formArticle->isSubmitted() && $formArticle->isValid() )
        {
            foreach ($article->getAuteurs() as $auteur) {
                $auteur->setUser($this->getUser());
            }
            $article->setUser($this->getUser());
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute("groupAuteur-new");
        }

        return $this->render('Article/NewArticle.html.twig', [
            'formArticle' => $formArticle->createView(),
            'article'=> $article
        ]);
    }

}
