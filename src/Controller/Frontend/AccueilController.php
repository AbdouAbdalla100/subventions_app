<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonce;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {   
        $em = $this->getDoctrine()->getManager();

        return $this->render('Frontend/accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'annonces' => $em->getRepository(Annonce::class)->findAll(),
        ]);
    
    }
}
