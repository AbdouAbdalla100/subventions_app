<?php

namespace App\Controller\Frontend;

use App\Entity\Organisme;
use App\Form\Type\OrganismeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormOrganismeController extends AbstractController
{
    /**
     * @Route("/form/organisme", name="form_organisme")
     */
    public function new(Request $request): Response
    {

        $organisme = new Organisme();
        // creates a Organisme object and initializes some data for this example
        $form = $this->createForm(OrganismeType::class, $organisme);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {   
            // die('ok');
            $em = $this->getDoctrine()->getManager();
            $em->persist($organisme);
            $em->flush();

            return $this->redirectToRoute('form_organisme');
        }

        return $this -> render ('Frontend/form_organisme/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }

}
