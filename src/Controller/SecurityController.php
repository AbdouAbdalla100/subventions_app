<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;


class SecurityController extends AbstractController
{

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
      $this->passwordEncoder=$passwordEncoder;
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('target_path');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */

    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    /**
     * @Route("/gestion/login", name="adminlogin")
     */
    public function adminlogin(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        // verification d'erreur
        $error = null;
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        if(!is_null($error)) {
            $this->addFlash(
               'error',
               $error->getMessageKey()
            );
        }

        return $this->render('@EasyAdmin/page/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'translation_domain' => 'admin',
            'page_title' =>'Authentification',
            'target_path' => $this->generateUrl('admin'),
            'username_label' => 'Your username',
            'password_label' => 'Your password',
            'sign_in_label' => 'Connexion',
            'crsf_token_intention' => 'authenticate'
           ]);
   
        
    }

     /**
     * @Route("/gestion/logout", name="adminlogout")
     */
    public function adminlogout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
     
    
    /**
     * @Route("/user/registration", name="register")
     */
    public function register(Request $request ): Response
    {
        $user=new User();
        $form=$this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        { 
            $user->setPassword(
                $this->passwordEncoder->encodePassword($form->get("password")->getData())
            );
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
            'target_path' => $this->generateUrl('frontend'),
            
        ]);
    }

}
