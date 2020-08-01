<?php

namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER') === TRUE) {
            // user is logged in
            return $this->redirectToRoute('user-index');
        }

        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') === TRUE) {
            // user is logged in
            return $this->redirectToRoute('admin-index');
        }

        if ($this->get('security.authorization_checker')->isGranted('ROLE_REVIEWER') === TRUE) {
            // user is logged in
            return $this->redirectToRoute('reviewer-index');
        }

        if ($this->get('security.authorization_checker')->isGranted('ROLE_AUTEUR') === TRUE) {
            // user is logged in
            return $this->redirectToRoute('article-index');
        }

        return $this->render('HomePage/home.html.twig', [
//            'controller_name' => 'Home',
        ]);
    }

    /**
     * @Route("/index", name="accueil-page")
     */
    public function home()
    {

        return $this->render('HomePage/home.html.twig', [
//            'controller_name' => 'Home',
        ]);
    }

}
