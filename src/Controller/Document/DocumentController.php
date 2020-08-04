<?php

namespace App\Controller\Document;

use App\Entity\Document;
use App\Form\DocumentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/Document")
 */
class DocumentController extends AbstractController
{


    /**
     * @Route("",name="show_list")
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function show(EntityManagerInterface $manager)
    {
        $DocumentList= $manager->getRepository(Document::class)->findAll();

        return $this->render("Document/show.html.twig",[
            "documentList" => $DocumentList,
        ]);
    }


    /**
     * @Route("/create", name="create-document")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function createDocument(Request $request,EntityManagerInterface $manager) : Response
    {
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $docFileName = $form->get('docName')->getData();
            if ($docFileName) {
                $originalFilename = pathinfo($docFileName->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$docFileName->guessExtension();
                $docFileName->move($this->getParameter('upload_directory'), $newFilename);
                $document->setDocName($newFilename);

                $manager->persist($document);
                $manager->flush();
                $this->addFlash('success','Le Document Est Ajouter Avec Success !!');
                return $this->redirectToRoute('show_list');
            }
        }

        return $this->render('Document/index.html.twig', [
            'controller_name' => 'DocumentController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit-document")
     * @param Request $request
     * @param Document $document
     * @param EntityManagerInterface $manager
     * @return RedirectResponse|Response
     */
    public function editDocument(Request $request,Document $document,EntityManagerInterface $manager):Response
    {
        $FileNamePath = $this->getParameter("upload_directory").'/'.$document->getDocName();

        $form=$this->createForm(DocumentType::class,$document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if(is_file($FileNamePath) && file_exists($FileNamePath)){
                unlink($FileNamePath);
                $manager->remove($document);
            }
            $docFileNameEdit = $form->get('docName')->getData();

            $originalFilenameEdit = pathinfo($docFileNameEdit->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilenameEdit.'-'.uniqid().'.'.$docFileNameEdit->guessExtension();
            $docFileNameEdit->move($this->getParameter('upload_directory'), $newFilename);
            $document->setDocName($newFilename);

            $manager->persist($document);
            $manager->flush();

            $this->addFlash('success','Le Document Est Mis A Jour Avec Success !!');
            return $this->redirectToRoute('show_list');
        }

        return $this->render('Document/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/delete/{id}", name="delete-document",methods="GET")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteDocument(Request $request,EntityManagerInterface $manager,int $id):Response
    {
        $document =$manager->getRepository(Document::class)->find($id);
        $path=$this->getParameter("upload_directory").'/'.$document->getDocName();
        if(is_file($path) && file_exists($path)){
            unlink($path);
        }
        $manager->remove($document);
        $manager->flush();
        $this->addFlash('success','Le Document Est Supprimer Avec Success !!');
        return $this->redirectToRoute('show_list');
    }
}
