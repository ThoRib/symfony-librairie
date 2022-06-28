<?php

namespace App\Form;

use App\Entity\LivreImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreImageCollectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ["label"=>"Nom :","required"=>true])
            ->add('imageFile', FileType::class, ["label"=>"Image :","required"=>true])
            ->remove('updatedAt')
            ->remove('imageName')
            ->remove('livres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LivreImage::class,
        ]);
    }
}
