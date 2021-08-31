<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrganismeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class)
        ->add('adresse', TextType::class)
        ;
    }

}

    // ->add('username', HiddenType::class, [
    //     'required'   => false,
    //     'empty_data' => 'user',
    // ])
    // ->add('password', HiddenType::class, [
    //     'required'   => false,
    //     'empty_data' => '1234',
    // ])
