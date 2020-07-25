<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\GroupeAuteur;
use App\Entity\Institution;
use App\Entity\Revue;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
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
                'choice_label' => 'nomCategorie'])
            ->add('revue',EntityType::class, [
                'class' => Revue::class,
                'choice_label' => 'nomRevue'])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
