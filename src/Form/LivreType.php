<?php

namespace App\Form;

use App\Entity\Livre;
use App\Entity\Auteur;
use App\Entity\Editeur;
use App\Entity\Categorie;
use App\Form\LivreImageCollectionType;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('description', CKEditorType::class, ["label"=>"Description :", "required"=>false])
            ->add('prix', MoneyType::class, ["label"=>"Tarif :", "required"=>false])
            ->add('auteurs', EntityType::class, ["class"=>Auteur::class, "label"=>"Auteurs", "multiple"=>true, "required"=>false, "by_reference"=>false, "attr"=>["class"=>"select2"]])
            ->add('categorie', EntityType::class, ["class"=>Categorie::class, "label"=>"Catégorie"])
            ->add('editeur', EntityType::class, ["class"=>Editeur::class, "label"=>"Editeur :"])
            ->add('imageFile', FileType::class, ["label"=>"Couverture :", "required"=>false])
            ->add('livreImages', CollectionType::class, ["entry_type"=>LivreImageCollectionType::class, "label"=>false, "allow_add"=>true, "allow_delete"=>true, "by_reference"=>false])
            ->remove('imageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
