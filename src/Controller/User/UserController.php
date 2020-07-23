<?php

namespace App\Controller\User;

use App\Entity\Institution;
use App\Entity\Users;
use App\Form\UserRegistartionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/edit/{id}", name="user_edit")
     */
    public function editUser()
    {
        return $this->render('user/add.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/delete/{id}", name="user_edit")
     */
    public function deleteUser()
    {
        return $this->render('user/add.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("" , name="user-index")
     * @return Response
     */
    public function homeUser():Response
    {
        return $this->render('UserPage/user.html.twig', [
        ]);
    }

    /**
     * @Route("/logout", name="logout", methods={"GET"})
     */
    public function logout()
    {
//        return $this->redirectToRoute('login');
        // controller can be blank: it will never be executed!
//        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }



//    /**
//     * @Route("/show", name="user_show")
//     */
//    public function show()
//    {
//        return $this->render('user/registration.html.twig', [
//            'controller_name' => 'UserController',
//        ]);
//    }
}
