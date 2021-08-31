<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonce;
use App\Entity\Organisme;
use App\Entity\User;


class DashboardController extends AbstractDashboardController
{   

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();     
         //return parent::index();
        return $this->render('dashboard.html.twig', [
           'countAllUser' =>  count($em->getRepository(User::class)->findAll()),
           'countAllOrganisme' =>  count($em->getRepository(Organisme::class)->findAll()),
           'annonces' => $em->getRepository(Annonce::class)->findAll(),

       ]);

    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Subvention');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::LinkToCrud('Annonce', 'fas fa-info', Annonce::class);
        yield MenuItem::LinkToCrud('Organisme', 'fas fa-door-open', Organisme::class);
        yield MenuItem::LinkToCrud('User', 'fas fa-user', User::class);
        // yield MenuItem::LinkToCrud('Message', 'fas fa-message', Message::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }

}
