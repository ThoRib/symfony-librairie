<?php

namespace App\DataFixtures;

use App\Entity\Editeur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EditeurFixtures extends Fixture
{

//====================== PROPRIETES ======================//

    public const DARGAUD = "dargaud";
    public const CASTERMAN = "casterman";
    public const DUPUIS = "dupuis";
    public const VENTS_D_OUEST = "vents d'ouest";
    public const LE_LIVRE_DE_POCHE = "le livre de poche";
    public const HACHETTE = "hachette";
    PUBLIC const LAROUSSE = "larousse";

//====================== METHODES ======================//

    public function load(ObjectManager $manager): void
    {
        $editeur = new Editeur();
        $editeur->setNom("Dargaud");
        $manager->persist($editeur);
        $this->addReference(self::DARGAUD, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Casterman");
        $manager->persist($editeur);
        $this->addReference(self::CASTERMAN, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Dupuis");
        $manager->persist($editeur);
        $this->addReference(self::DUPUIS, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Vents d'Ouest");
        $manager->persist($editeur);
        $this->addReference(self::VENTS_D_OUEST, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Le Livre De Poche");
        $manager->persist($editeur);
        $this->addReference(self::LE_LIVRE_DE_POCHE, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Hachette");
        $manager->persist($editeur);
        $this->addReference(self::HACHETTE, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Larousse");
        $manager->persist($editeur);
        $this->addReference(self::LAROUSSE, $editeur);

        $editeur = new Editeur();
        $editeur->setNom("Ombres Noires");
        $manager->persist($editeur);

        $editeur = new Editeur();
        $editeur->setNom("Seuil");
        $manager->persist($editeur);

        $editeur = new Editeur();
        $editeur->setNom("Actes Sud");
        $manager->persist($editeur);

        $editeur = new Editeur();
        $editeur->setNom("Flammarion");
        $manager->persist($editeur);

        $manager->flush();
    }
}
