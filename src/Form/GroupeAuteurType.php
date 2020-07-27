<?php

namespace App\Form;

use App\Entity\GroupeAuteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupeAuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAuteur',TextType::class)
            ->add('prenomAuteur',TextType::class)
            ->add('NomIns',TextType::class)
            ->add('adresseIns',TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GroupeAuteur::class,
        ]);
    }
}
