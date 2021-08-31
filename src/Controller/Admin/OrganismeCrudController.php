<?php

namespace App\Controller\Admin;

use App\Entity\Organisme;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\repository\ServiceEntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Field;

class OrganismeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Organisme::class;
    }
    

    
    public function configureFields(string $organisme): iterable
    {       
        //yield Field\IdField::new('id');
        yield Field\TextField::new('nom');
        yield Field\TextField::new('adresse');
        //yield Field\TextEditorField::new('description');
    }
    
    public function countAllOrganisme()
    {
        $queryBuild = $this->createQuerybuild(alias,'a');
        $queryBuild -> select(select,'COUNT(a.id) as value');
        $result = $queryBuild->getQuery()->getResult();

        return $result;
    }
}

