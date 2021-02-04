<?php

namespace App\Form;

use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', TextType::class, [
                'label' => 'Etat'
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('type', TextType::class, [
                'label' => 'Type'
            ])
            ->add('place', TextType::class, [
                'label' => 'Lieu'
            ])
            ->add('client', TextType::class, [
                'label' => 'Client'
            ])
            ->add('startingDate', TextType::class, [
                'label' => 'Date de début'
            ])
            ->add('duration', TextType::class, [
                'label' => 'Durée estimée'
            ])
            ->add('quoteNumber', TextType::class, [
                'label' => 'Numéro de devis'
            ])
            ->add('worker', TextType::class, [
                'label' => 'Ouvrier'
            ])
            ->add('comment', TextType::class, [
                'label' => 'Commentaire'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}
