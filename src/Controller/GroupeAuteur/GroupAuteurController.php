<?php

namespace App\Controller\GroupeAuteur;

use App\Entity\GroupeAuteur;
use App\Form\GroupeAuteurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/auteur")
 */
class GroupAuteurController extends AbstractController
{
    /**
     * @Route("", name="GroupAuteur")
     */
    public function index()
    {
        return $this->render('GroupAuteur/index.html.twig', [
            'controller_name' => 'GroupAuteurController',
        ]);
    }


    /**
     * @Route("/create",name="groupAuteur-new")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function newGroupeAuteur(Request $request,EntityManagerInterface $manager):Response
    {
        $groupeAuteur =new GroupeAuteur();
        $formgroupeAuteur = $this->createForm(GroupeAuteurType::class,$groupeAuteur);
        $formgroupeAuteur->handleRequest($request);

        if($formgroupeAuteur->isSubmitted() && $formgroupeAuteur->isValid() )
        {
            $groupeAuteur->setUser($this->getUser());
            $manager->persist($groupeAuteur);
            $manager->flush();
        }

        return $this->render('GroupAuteur/new.html.twig',[
            'formgroupeAuteur' => $formgroupeAuteur->createView(),
        ]);
    }

}
