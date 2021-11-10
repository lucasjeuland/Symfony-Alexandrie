<?php

namespace App\Controller;

use App\Controller\Forms\SignUpType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/user", name="user_")
 */

class UserController extends AbstractController
{
    /**
     * Formulaire d'inscription
     *
     * @Route("/signup", name="sign_up")
     */
    public function signUp(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);

        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setUserType('customer');
            $user->setCreatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_sign_up_success');
        }

        return $this->renderForm('user/signUp.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * Succès d'inscription
     *
     * @Route("/signupSuccess", name="sign_up_success")
     */
    public function signUpSuccess(Request $request): Response {
        return $this->render('user/signUpSuccess.html.twig');
    }
}