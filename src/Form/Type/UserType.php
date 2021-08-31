<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom')
        ->add('prenom')
        ->add('dateNaiss')
        ->add('adresse')
        ->add('notification', ChoiceType::class, [
            'choices'  => [
                'active' => true,
                'non active' => false,
            ]
        ])

        ->add('username', HiddenType::class, [
            'required'   => false,
            'empty_data' => 'user',
        ])
        ->add('password', HiddenType::class, [
            'required'   => false,
            'empty_data' => '1234',
        ])
    
        ;
    }

    // public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => User::class,
    //     ]);
    // }

}   