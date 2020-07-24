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
        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($article);
            $manager->flush();
            return new Response("record saved successfully");
        }


        return $this->render('Article/new.html.twig',[
            'formArticle' => $form->createView(),
            'article'=> $article
        ]);
    }

}
