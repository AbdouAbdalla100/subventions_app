<?php

namespace App\Controller\Admin;

use App\Entity\Annonce;
use EasyCorp\Bundle\EasyAdminBundle\Field;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\repository\ServiceEntityRepository;

class AnnonceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Annonce::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        $publier = Action::new('Publier', 'Publier', 'fa fa-info')
            ->LinkToRoute('notification',function($entity) {
                return ['id' => $entity->getId()];
            })
            ->addCssClass('btn btn-success')
            ;

        return $actions
            ->add(Crud::PAGE_INDEX, $publier)
            // ->disable(Action::EDIT)
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        //yield Field\IdField::new('id');
        yield Field\TextField::new('titre');
        yield Field\TextField::new('libelle');
        yield Field\TextField::new('concerne');
        yield Field\TextEditorField::new('consigne');
        yield Field\AssociationField::new('organisme');

    }

    // public function publier(User $user)
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $em->getRepository(User::class);

    //     if ($user.notification == '1') 
    //     {
    //         return $em->findAll();
    //     }

       
    // }

    //public function configureCrud(crud $crud)

    // $payAffiliations = Action::new('payAffiliations', 'Payer', 'ft-money')->linkToRoute('pay_affiliations', function ($entity) {
    //     return ['affiliationId' => $entity->getId()];
    // });

}


// public function configureActions(Actions $actions): Actions
// {
//     return $actions
//         // ...
//         ->add(Crud::PAGE_INDEX, Action::DETAIL)
//         ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER)
//     ;
// }


