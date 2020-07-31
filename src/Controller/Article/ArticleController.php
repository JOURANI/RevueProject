<?php

namespace App\Controller\Article;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Revue;
use App\Entity\GroupeAuteur;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GroupeAuteurRepository;
use App\Repository\RevueRepository;
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
     * @var EntityManagerInterface
     */
    private $manager;
    /**
     * @var ArticleRepository
     */
    private $repository;
    /**
     * @var CategorieRepository
     */
    private $categorieRepository;
    /**
     * @var RevueRepository
     */
    private $revueRepository;
    /**
     * @var GroupeAuteurRepository
     */
    private $groupAuteurRepository;
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    public function __construct(EntityManagerInterface $manager,
                                ArticleRepository $repository,
                                CategorieRepository $categorieRepository,
                                RevueRepository $revueRepository,
                                GroupeAuteurRepository $groupAuteurRepository,
                                ArticleRepository $articleRepository)
    {
        $this->manager = $manager;
        $this->repository = $repository;
        $this->categorieRepository = $categorieRepository;
        $this->revueRepository = $revueRepository;
        $this->groupAuteurRepository = $groupAuteurRepository;
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("", name="article-index" , methods={"GET"} )
     */
    public function index()
    {
        return $this->render("Article/index.html.twig", [
            'articles'   => $this->repository->findAll(),
            'categories' => $this->categorieRepository->findAll(),
            'revues'     =>  $this->revueRepository->findAll()
        ]);
    }


    /**
     * @Route("/show/{id}", name="article.show")
     * @param Article $article
     */
    public function showArticle(Article $article)
    {

        return $this->render("Article/show.html.twig",[
                'articles'   => $this->repository->find($article),
                'categories' => $this->categorieRepository->findAll(),
                'revues'     => $this->revueRepository->findAll(),
                'auteurs'    => $this->groupAuteurRepository->SelectArticleAuthors($article->getId())
            ]
        );
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

    /**
     * @Route("/edit/{id}", name="article-edit")
     * @param Article $article
     * @param Request $request
     */
    public function editArticle(Article $article,Request $request)
    {
        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->manager->flush();
//            $this->addFlash('success','le bien et modifier avec succses');
            return $this->redirectToRoute('home');
        }

        return $this->render("Article/edit.html.twig",[
            'form' => $form->createView()
        ]);
    }

}
