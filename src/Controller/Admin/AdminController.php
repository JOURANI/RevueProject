<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    /**
     * @Route("/admin" , name="admin-index")
     * @return Response
     */
    public function HomeAdmin():Response
    {
        return $this->render('AdminPage/admin.html.twig', [
        ]);
    }
}
