<?php

namespace App\Controller\Frontend;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use  Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\UserType;
use App\Entity\User;

class FormUserController extends AbstractController
{
    /**
     * @Route("/form_user", name="form_user")
    */

    public function new(Request $request): Response
    {
        // creates a User object and initializes some data for this example
        $user = new User();
        // $user->setUser('Write a blog post');
        // $user->setDateNaiss(new \DateTime());

        

        $form = $this -> createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            /*  Permet de verifier les données que nous envoyons à la base:
              dd($request->get('user')); $request->getMethod('POST') */
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('form_user');
        }

        return $this -> render ('Frontend/form_user/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }


}
