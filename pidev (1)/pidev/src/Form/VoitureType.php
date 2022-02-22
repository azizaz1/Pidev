<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule',[
                'attr'=>['placeholder'=>"Entrez la matricule",
                    'class' => 'form-control']])
            ->add('marque',[
                'attr'=>['placeholder'=>"Entrez la marque",
                    'class' => 'form-control']])
            ->add('couleur',[
                'attr'=>['placeholder'=>"Entrez la couleur",
                    'class' => 'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
