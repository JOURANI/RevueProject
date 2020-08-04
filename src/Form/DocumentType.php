<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('docName',filetype::class,[
                'label' => 'Document (PDF file)',
                'required' => false, // to allow Entity constraints we turn required false
                'data_class' => null,
                //'id' => 'customFile', // we could define the element id like this method
                'attr' =>
                    [
                        'placeholder' => 'Choose a file',
//                       'class' => 'custom-file-input' // we could define the element class like this method
                    ],
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => ['application/pdf', 'application/x-pdf'],
                        'mimeTypesMessage' => 'Please upload a valid PDF document']
                    )]
            ])
            ->add('Save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
             'data_class' => Document::class,
        ]);
    }
}
