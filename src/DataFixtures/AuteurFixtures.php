<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use App\DataFixtures\LivreFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AuteurFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $auteur = new Auteur();
        $auteur->setNom('Roba');
        $auteur->setPrenom('Jean');
        $auteur->setImageName("jean-roba.jpg");
        $auteur->setBiographie("Jean Roba, dit Roba, est un auteur de bande dessinée né le 28 juillet 1930 à Schaerbeek, dans la région de Bruxelles-Capitale, et mort dans la même ville le 14 juin 2006. Il est surtout connu comme l'auteur de la série Boule et Bill, bien qu'il ait réalisé beaucoup d'autres travaux.");
        $auteur->addLivre($this->getReference(LivreFixtures::ROYAL_TAQUIN));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Cazenove');
        $auteur->setPrenom('Christophe');
        $auteur->setImageName("christophe-cazenove.jpg");
        $auteur->setBiographie("Christophe Cazenove, dit Cazenove, est un scénariste de bandes dessinées français né le 16 juillet 1969 à Martigues. Scénariste pilier du catalogue des éditions Bamboo, il est surtout spécialisé dans la bande dessinée d'humour autour des métiers, développée par cet éditeur.");
        $auteur->addLivre($this->getReference(LivreFixtures::ROYAL_TAQUIN));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Bastide');
        $auteur->setPrenom('Jean');
        $auteur->setImageName("jean-bastide.jpeg");
        $auteur->setBiographie("Jean Bastide, dit Bastide, est un dessinateur français de bande dessinée né le 17 décembre 1982 à Albi. Il est aussi coloriste.");
        $auteur->addLivre($this->getReference(LivreFixtures::ROYAL_TAQUIN));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Goscinny');
        $auteur->setPrenom('René');
        $auteur->setImageName("rene-goscinny.jpg");
        $auteur->setBiographie("René Goscinny, né le 14 août 1926 à Paris où il est mort le 5 novembre 1977, est un scénariste de bande dessinée, journaliste, écrivain et humoriste français, également producteur, réalisateur et scénariste de films.");
        $auteur->addLivre($this->getReference(LivreFixtures::L_EVASION_DES_DALTONS));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Uderzo');
        $auteur->setPrenom('Alberto Aleandro');
        $auteur->setPseudo('Albert Uderzo');
        $auteur->setImageName("albert-uderzo.jpg");
        $auteur->setBiographie("Albert Uderzo, nom de plume d'Alberto Aleandro Uderzo, né le 25 avril 1927 à Fismes (Marne) et mort le 24 mars 2020 à Neuilly-sur-Seine (Hauts-de-Seine), est un auteur de bande dessinée français, un éditeur et un homme d'affaires. Il travaille notamment pour les journaux France-Soir et France Dimanche, et pour les magazines Tintin et Pilote. Avec Jean-Michel Charlier, il est l'auteur de la série Tanguy et Laverdure. Il crée également, avec René Goscinny, les séries Oumpah-Pah et Astérix. ");
        $auteur->addLivre($this->getReference(LivreFixtures::ASTERIX_ET_CLEOPATRE));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Maurice');
        $auteur->setPrenom('de Bevere');
        $auteur->setPseudo('Morris');
        $auteur->setImageName("morris.jpg");
        $auteur->setBiographie("Maurice de Bevere, dit Morris, né le 1ᵉʳ décembre 1923 à Courtrai et mort le 16 juillet 2001 à Bruxelles, est un auteur de bandes dessinées belge connu comme créateur en 1946 de Lucky Luke, série populaire qu'il a dessinée jusqu'à sa mort, seul ou en collaboration avec divers scénaristes, dont René Goscinny.");
        $auteur->addLivre($this->getReference(LivreFixtures::L_EVASION_DES_DALTONS));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('André');
        $auteur->setPrenom('Franquin');
        $auteur->setImageName("andre-franquin.jpg");
        $auteur->setBiographie("André Franquin, né le 3 janvier 1924 à Etterbeek (Belgique) et mort le 5 janvier 1997 à Saint-Laurent-du-Var (France), est un auteur belge francophone de bande dessinée, principalement connu pour les séries Spirou et Fantasio, Gaston, Modeste et Pompon et les Idées noires ; il est aussi le créateur du Marsupilami, animal imaginaire.");
        $auteur->addLivre($this->getReference(LivreFixtures::LA_SAGA_DES_GAFFES));
        $manager->persist($auteur);

        $auteur = new Auteur();
        $auteur->setNom('Fleischer');
        $auteur->setPrenom('Max');
        $auteur->setImageName("max-fleischer.webp");
        $auteur->setBiographie("Max Fleischer est né en 1883 en Pologne. Il fut l'un des plus grands pionniers de l'animation, créant avec son frère Dave les studios Fleischer Studios, principal concurrent des studios Burbank de Disney. Max
        Fleischer est notamment l'inventeur du rotoscope, une technique qui permettait d'animer des personnages de manière réaliste et à moindre coût qu'il applique sur la série Out of the Inkwell, avec Koko le Clown.
        Outre l'adaptation en série animée du comic strip Popeye, on lui doit ensuite la création du personnage de Betty Boop, la première femme à bénéficier de sa propre série de dessins animés aux États-Unis. Fleischer meurt en 1972 à l'age de 89 ans.");
        $auteur->addLivre($this->getReference(LivreFixtures::BETTY_BOOP));
        $manager->persist($auteur);
        $manager->flush();

        $auteur = new Auteur();
        $auteur->setNom('Pellarin');
        $auteur->setPrenom('René Marcel');
        $auteur->setPseudo('René Pellos');
        $auteur->setImageName("rene-pellos.jpg");
        $auteur->setBiographie("Né en 1900, René Pellarin, futur René Pellos, publie ses premiers dessins à l’âge de seize ans. Dès les années 30, il devient un grand dessinateur sportif dans les pages de « Match l’intransigeant », puis dans « Miroir-Sprint », « Sport Sélection », « Sport-Mondial », « Sport-Digest »… Il aborde la bande dessinée à la fin des années 30 dans « Jeunesse Magazine » (Monsieur Petipon), « Junior » (Futuropolis), « Robinson« , « Fillette », « Zorro » où il signe La Guerre du Feu mais aussi Chouchou. En 1948, il reprend les célèbres Pieds Nickelés dont il anime les aventures jusqu’en 1981.");
        $auteur->addLivre($this->getReference(LivreFixtures::LES_PIEDS_NICKELES));
        $manager->persist($auteur);
        $manager->flush();

        $auteur = new Auteur();
        $auteur->setNom('Leblanc');
        $auteur->setPrenom('Maurice');
        $auteur->setImageName("maurice-leblanc.jpg");
        $auteur->setBiographie("Marie Émile Maurice Leblanc est un romancier français né le 11 décembre 1864, à Rouen, et mort le 6 novembre 1941, à Perpignan. Auteur de nombreux romans policiers et d’aventures, il est le créateur du célèbre gentleman-cambrioleur Arsène Lupin.");
        $auteur->addLivre($this->getReference(LivreFixtures::LES_CONFIDENCES_D_ARSENE_LUPIN));
        $manager->persist($auteur);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            LivreFixtures::class,
        ];
    }
}
