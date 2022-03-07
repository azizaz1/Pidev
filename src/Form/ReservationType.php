<?php

namespace App\Form;

use App\Entity\Reservation;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Hotel;
use App\Entity\User;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_debut' , \Symfony\Component\Form\Extension\Core\Type\DateType::class)
            ->add('date_fin' , \Symfony\Component\Form\Extension\Core\Type\DateType::class)
            ->add('nbrperson')
            ->add('prixreservation')
            ->add('hotel',EntityType::class,[
                'class'=>Hotel::class,
                'choice_label'=>'name',
                'multiple'=>false,
                'expanded'=>false,])
            ->add('user',EntityType::class,[
                'class'=>User::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
