<?php

namespace App\Form;

use App\Entity\Carousel;
use App\Entity\Home;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('texte', CKEditorType::class, ["label"=>"Description :", "required"=>false])
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>true])
            ->add('homes', EntityType::class, ["class"=>Home::class, "label"=> "Accueil :", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
            ->remove('imageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
