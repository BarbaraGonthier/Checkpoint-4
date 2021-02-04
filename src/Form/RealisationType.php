<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Realisation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class RealisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('updatedAt')
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name'
                ])
            ->add('nameFile', VichFileType::class, [
                'required'      => true,
                'allow_delete'  => false, // not mandatory, default is true
                'download_uri' => false, // not mandatory, default is true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Realisation::class,
        ]);
    }
}
