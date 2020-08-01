<?php

namespace App\Controller\Reviewer;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReviewerController extends AbstractController
{
    /**
     * @Route("/reviewer", name="reviewer-index")
     */
    public function index()
    {
        return $this->render('Reviewer/reviewer.html.twig', [
            'controller_name' => 'ReviewerController',
        ]);
    }
}
