<?php

namespace App\Form;

use App\Entity\GroupeAuteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupeAuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAuteur')
            ->add('prenomAuteur')
            ->add('NomIns')
            ->add('adresseIns')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GroupeAuteur::class,
        ]);
    }
}
