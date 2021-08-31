<?php

namespace App\Controller\Frontend;

use App\Entity\User;
use Twig\Environment;
use App\Entity\Annonce;
use App\Services\MailerService;
use Symfony\Component\Mine\Email;
use App\Repository\AnnonceRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class NotificationController extends AbstractController
{ 
    public static function getEntityFqcn(): string
    {
        return User::class;
    }
    
    /**
     *  @Route("/notification", name="notification")
    */
    
    public function index(Request $request, \Swift_Mailer $mailer) : Response
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $id = $request->get('annonce_id');
            $annonce = $em->getRepository(Annonce::class)->find($id);
            $users = $em->getRepository(User::class)->findBy(['notification' => 1]);
            // $valmax = max($annonce);
            //    dd($valmax);
            $message = (new \Swift_Message('New message'))
                     ->setFrom('plateformesubvention@gmail.com');
                     foreach ($users as $user)
                    {
                         $message->addTo($user->getAdresse());
                    }
                    //  $message->setTo('abdouabdalla100@gmail.com');
                     $message->setBody(
                         $this->renderView(
                            'Frontend/notification/message.html.twig',
                            [ 'annonce' => $annonce, ]
                         ),
                         'text/html'
                        );
    
                $mailer->send($message);
                // dd($mailer);
    
            return $this->render('Frontend/notification/success.html.twig');
        }
        $users =  $em->getRepository(User::class)->findBy(['notification' => '1']);
            return $this->render('Frontend/notification/index.html.twig', [
                'users' => $users,
                'annonce' => $id
            ]);
        // return $this->render('Frontend/notification/success.html.twig');
    }
        // return $this->render('Frontend/notification/success.html.twig');

        // $em = $this->getDoctrine()->getManager();
        // $annonce = $em->getRepository(Annonce::class)->findAll();
        // if ($annonce)
        // {   
        //     // dd($annonce);
        //     $mailerservice->send(
        //         "Nouveau Message",
        //         "platformsubvention@gmail.com",
        //         "abdouabdalla100@gmail.com",
        //         "Frontend/notification/message.html.twig",
        //         [
        //             "name" => "Message",
        //             "description" => $annonce
        //         ]
        //     );
        // }
    


}
