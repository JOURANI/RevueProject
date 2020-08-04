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
            $docFileName = $formArticle->get('file')->getData();
            if ($docFileName) {
                $originalFilename = pathinfo($docFileName->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = 'article' . '-' .$originalFilename . '-' . uniqid() . '.' . $docFileName->guessExtension();
                $docFileName->move($this->getParameter('upload_directory'), $newFilename);
                $article->setFile($newFilename);
            }
            foreach ($article->getAuteurs() as $auteur) {
                $auteur->setUser($this->getUser());
            }
            $article->setUser($this->getUser());
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute("article-index");
        }

        return $this->render('Article/addNew.html.twig',[
            'formArticle' => $formArticle->createView(),
            'article'=> $article
        ]);
    }

//    /**
//     * @Route("/add", name="article-add")
//     * @param Request $request
//     * @param EntityManagerInterface $manager
//     * @return Response
//     */
//    public function add(Request $request,EntityManagerInterface $manager):Response
//    {
//        $article =new Article();
//        $formArticle = $this->createForm(ArticleType::class,$article);
//        $formArticle->handleRequest($request);
//
//        if($formArticle->isSubmitted() && $formArticle->isValid() )
//        {
//            foreach ($article->getAuteurs() as $auteur) {
//                $auteur->setUser($this->getUser());
//            }
//            $article->setUser($this->getUser());
//            $manager->persist($article);
//            $manager->flush();
//            return $this->redirectToRoute("groupAuteur-new");
//        }
//
//        return $this->render('Article/NewArticle.html.twig', [
//            'formArticle' => $formArticle->createView(),
//            'article'=> $article
//        ]);
//    }

    /**
     * @Route("/edit/{id}", name="article-edit")
     * @param Article $article
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function editArticle(Article $article,Request $request,EntityManagerInterface $manager):Response
    {
        $FileNamePath = $this->getParameter("upload_directory").'/'.$article->getFile();

        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if(is_file($FileNamePath) && file_exists($FileNamePath)){
                unlink($FileNamePath);
            }
            $docFileNameEdit = $form->get('file')->getData();

            $originalFilenameEdit = pathinfo($docFileNameEdit->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilenameEdit.'-'.uniqid().'.'.$docFileNameEdit->guessExtension();
            $docFileNameEdit->move($this->getParameter('upload_directory'), $newFilename);
            $article->setFile($newFilename);

            $this->manager->flush();
//            $this->addFlash('success','le bien et modifier avec success');
            return $this->redirectToRoute('article-index');
        }

        return $this->render("Article/edit.html.twig",[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}",name="article-delete")
     * @param Article $article
     * @return Response
     */
    public function deleteArticle(Article $article):Response
    {
        $path=$this->getParameter("upload_directory").'/'.$article->getFile();
        if(is_file($path) && file_exists($path)){
            unlink($path);
        }
        $this->manager->remove($article);
        $this->manager->flush();
        return $this->redirectToRoute('article-index');
    }

}
