<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CIN',TextType::class,[
            'attr'=>['placeholder'=>"Entrez votre numero CIN",
                           'class' => 'form-control']])
            ->add('nom',TextType::class,[
                'attr'=>['placeholder'=>"Entrez votre nom",
                    'class' => 'form-control']])
            ->add('prenom',TextType::class,[
                'attr'=>['placeholder'=>"Entrez votre prenom",
                    'class' => 'form-control']])
            ->add('date_naissance')
            ->add('telephone',TextType::class,[
                'attr'=>['placeholder'=>"Entrez votre telephone",
                    'class' => 'form-control']])
            ->add('mail',TextType::class,[
                'attr'=>['placeholder'=>"Entrez votre e-mail",
                    'class' => 'form-control']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}