<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Livre;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ["label"=>"Nom : ", "required"=>false])
            ->add('prenom', TextType::class, ["label"=>"Prenom : ", "required"=>false])
            ->add('pseudo', TextType::class, ["label"=>"Pseudo : ", "required"=>false])
            ->add('biographie', CKEditorType::class, ["label"=>"Biographie : ", "required"=>false])
            ->add('livres', EntityType::class, ["class"=>Livre::class, "label"=>"Publications", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
            ->add('imageFile', FileType::class, ["label"=>"Portrait :", "required"=>false])
            ->remove('imageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
