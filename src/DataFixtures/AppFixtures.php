<?php

namespace App\DataFixtures;

use symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
//use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        
        $user = new User();
        $user->setNom('Abdalla');
        $user->setPrenom('abdou');
        $user->setDateNaiss(new \DateTime());
        $user->setAdresse('abdouabdalla100@gmail.com');
        $user->setNotification('active');
        $user->setUsername('admin');
        $user->setPassword('admin1234');
        $user->setRoles(['ROLE_ADMIN']);
           $manager->persist($user);
        
    $manager->flush();
    
        //     $use = new User();
        //     $user->setNom('Abdoulaye');
        //     $user->setPrenom('abdouraoufi');
        //     $user->setAdresse('abdoulayeabdou@gmail.com');
        //     $user->setNotification('active');
        //     $use->setUsername('abdoulaye');
        //     $use->setPassword('user1234');
        //     $use->setRoles(['ROLE_USER']);
        //        $manager->persist($use);

        // $manager->flush();
    }
}
