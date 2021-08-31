<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\repository\ServiceEntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Field;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $user): iterable
    {
        //yield Field\IdField::new('id');
        yield Field\TextField::new('nom');
        yield Field\TextField::new('prenom');
        yield Field\DateTimeField::new('dateNaiss');
        yield Field\TextField::new('adresse');
        yield Field\TextField::new('notification');
        yield Field\TextField::new('username');
        yield Field\TextField::new('password');
        // yield Field\TextField::new('roles');
        
    }
    
    public function countAllUser()
    {
        $queryBuilder = $this->createQuery(alias,'a');
        $queryBuilder -> select(select,'COUNT(a.id) as value');

        return $queryBuilder->getQuery()->getResult();
    }    
}

