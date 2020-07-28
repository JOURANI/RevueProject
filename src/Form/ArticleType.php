<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Revue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class)
            ->add('abstract',TextType::class)
            ->add('keyword',TextType::class)
            ->add('content',TextareaType::class)
            ->add('size',IntegerType::class)
            ->add('categorie',EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nomCategorie'
            ])
            ->add('revue',EntityType::class, [
                'class' => Revue::class,
                'choice_label' => 'nomRevue'
            ])

            ->add('auteurs', CollectionType::class, [
                'entry_type' => GroupeAuteurType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'entry_options' => [ 'label' => false],
                'by_reference' => false,
                'label' => false
            ])
        ;

//        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
//            $event->getData()->addAuteur(new GroupeAuteur());
//        });


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
