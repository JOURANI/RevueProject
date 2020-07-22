<?php

namespace App\Controller;

use App\Entity\Institution;
use App\Entity\Users;
use App\Form\UserRegistartionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
/**
 * @Route("/user", name="user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/show", name="user_show")
     */
    public function show()
    {

        return $this->render('user/add.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/add", name="user_add")
     */
    public function addUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new Users();
        $form = $this->createForm(UserRegistartionType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setCreatedAt(new \DateTime());
            $user->setUpdatedAt(new \DateTime());
            $entityManager->persist($user);
            $entityManager->flush();
        }
        return $this->render('user/add.html.twig', [
            'formuser' =>  $form->createView(),
        ]);
    }

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

}
