<?php

namespace App\DataFixtures;

use App\Entity\Security\Group;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture {

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager) {
            $user = new User();
            $user->setNom('Abdalla');
            $user->setPrenom('abdou');
            $user->setDateNaiss(new \DateTime());
            $user->setUsername('abdouabdel@gmail.com');
            $user->setPassword($this->passwordEncoder->encodePassword($user,'admin1234' ));
            $user->setAdresse('abdouabdel@gmail.com');
            $user->setRoles(['ROLE_ADMIN']);
            $user->setNotification('active');
            $manager->persist($user);
        $manager->flush();
    }

   
}
