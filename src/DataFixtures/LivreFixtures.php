<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use App\DataFixtures\EditeurFixtures;
use App\DataFixtures\CategorieFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class LivreFixtures extends Fixture implements DependentFixtureInterface
{

// ====================================================== //
// ===================== PROPRIETES ===================== //
// ====================================================== //

    public const ROYAL_TAQUIN = "royal taquin";
    public const L_EVASION_DES_DALTONS = "l'évasion des daltons";
    public const LUCKY_LUKE_CONTRE_PAT_POCKER = "lucky luke contre pat pocker";
    public const ASTERIX_ET_CLEOPATRE = "astérix et cleopatre";
    public const LA_SAGA_DES_GAFFES = "la saga des gaffes";
    public const LE_CAS_LAGAFFE = "le cas lagaffe";
    public const BETTY_BOOP = "betty boop";
    public const LES_PIEDS_NICKELES = "les pieds nickeles";
    public const LES_CONFIDENCES_D_ARSENE_LUPIN = "Les confidences d'Arsène Lupin";
    public const ARSENE_LUPIN_GENTLEMAN_CAMBRIOLEUR = "Arsene Lupin Gentleman Cambrioleur";


// ====================================================== //
// ====================== METHODES ====================== //
// ====================================================== //

    public function load(ObjectManager $manager): void
    {
        $livre = new Livre();
        $livre->setTitre("Royal Taquin");
        $livre->setImageName("boule-bill-tome-42-royal-taquin.jpg");
        $livre->setDescription("Oyez, Oyez, gentes dames et gentes damoiseaux ! Le seigneur Bill et ses fidèles sujets, Boule et Pouf, vous accueilleront dans leur château fort pour vivre des aventures extraordinaires. En vrai roi taquin, à la maison ou à l'occasion de visites de châteaux faites en famille, Bill fait le plein de farces et règne sur son petit monde, avec la gaité et la facétie qui le caractérisent.");
        $livre->setEditeur($this->getReference(EditeurFixtures::DARGAUD));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::ROYAL_TAQUIN, $livre);

        $livre = new Livre();
        $livre->setTitre("L'évasion des Daltons");
        $livre->setImageName("evasion-des-daltons.jpg");
        $livre->setDescription("Avec pour seul compagnon son cheval Jolly Jumper, \"l'homme qui tire plus vite que son ombre\" fait régner l'ordre et la justice dans un Far-West de fantaisie mille fois plus vrai que le vrai. Poursuivant les terribles frères Dalton ou croisant la route de divers personnages historiques, Lucky Luke nous fait découvrir dans la bonne humeur les dessous de la conquête de l'Ouest.");
        $livre->setEditeur($this->getReference(EditeurFixtures::DUPUIS));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::L_EVASION_DES_DALTONS, $livre);

        $livre = new Livre();
        $livre->setTitre("Lucky Luke contre Pat Pocker");
        $livre->setImageName("lucky-luke-contre-pat-pocker.jpg");
        $livre->setDescription("Lucky Luke arrive dans une ville pour le moins tranquille jusqu'à ce qu'il tombe sur une armoire à glace nommé Angelface l'angélique à qui il règle vite son compte. Mais le délinquant va chercher de l'aide chez son associé Pat Poker qui, lui, ne tient plus à avoir affaire à Lucky Luke. ");
        $livre->setEditeur($this->getReference(EditeurFixtures::DUPUIS));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::LUCKY_LUKE_CONTRE_PAT_POCKER, $livre);

        $livre = new Livre();
        $livre->setTitre("Astérix et Cléopatre");
        $livre->setImageName("asterix-et-cleopatre.jpg");
        $livre->setDescription("Jules César nargue Cléopâtre : les Romains construisent des palais, des temples et des forums magnifiques alors que les Égyptiens ne construisent plus rien depuis les pyramides. Vexée, Cléopâtre charge son architecte Numérobis de bâtir un palais pour César en trois mois. Pour Numérobis, sa seule chance de venir au bout de cette tâche malgré l'obstruction des Romains est de demander l'aide de son vieil ami Panoramix. Le druide part donc pour l'Égypte lui prêter main-forte, accompagné d'Astérix et Obélix.  ");
        $livre->setEditeur($this->getReference(EditeurFixtures::DARGAUD));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::ASTERIX_ET_CLEOPATRE, $livre);

        $livre = new Livre();
        $livre->setTitre("La saga des gaffes");
        $livre->setImageName("la-saga-des-gaffes.jpg");
        $livre->setDescription("On retrouve dans cet album les gags sur les nouveaux rangement de la documentation, le début de la guerre du parcmètre, les confrontations avec Longtarin et les rêveries d'aventures de Gaston et Jeanne. On trouve également la planche sur la torture pour Amnesty International. ");
        $livre->setEditeur($this->getReference(EditeurFixtures::DUPUIS));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::LA_SAGA_DES_GAFFES, $livre);

        $livre = new Livre();
        $livre->setTitre("Le cas Lagaffe");
        $livre->setImageName("le-cas-lagaffe.jpg");
        $livre->setDescription("Le Cas Lagaffe est l'album 9 dans la série originale de Gaston. Il parait en 1971.");
        $livre->setEditeur($this->getReference(EditeurFixtures::DUPUIS));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::LE_CAS_LAGAFFE, $livre);

        $livre = new Livre();
        $livre->setTitre("Betty Boop");
        $livre->setImageName("betty-boop.jpg");
        $livre->setDescription("L'icône mondiale née dans les années 30 est de retour !
        Elle a été dans les années 30 la première femme ouvertement sensuelle à franchir les barrières de la pudibonderie ambiante en étant publiée en strips quotidiens dans de grands journaux américains. Elle a connu une carrière internationale dans le dessin animé. Elle est une icône mondiale, la seule à pouvoir chanter le « Poo-poo-pee-doo» popularisé par Marylin dans « I wanna be loved by you » sans que personne ne songe à le lui reprocher ! Elle se nomme Betty Boop. Et peut-être, à force de la voir déclinée sur de multiples supports, avait-on oublié l'essence-même de son identité : la bande dessinée.
        Avec cette intégrale des planches dominicales de Betty Boop, c'est à une r edécouverte d'un personnage emblématique du dessin animé, du neuvième art, et de l'Amérique que vous invitent les éditions VENTS D'OUEST. Au gré d'aventures qui n'ont rien perdu de leur fraicheur, de leur verve, ni de leur beauté graphique.");
        $livre->setEditeur($this->getReference(EditeurFixtures::VENTS_D_OUEST));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::BETTY_BOOP, $livre);

        $livre = new Livre();
        $livre->setTitre("Les Pieds Nickelés");
        $livre->setImageName("les-pieds-nickeles.jpg");
        $livre->setDescription("Toujours à l’affût d’une idée rocambolesque pour faire fortune, les Pieds Nickelés ont un nouveau plan : ils vont devenir riches en créant leur marque de cycles ! Évidemment, l’épreuve reine pour faire la promotion d’une nouvelle marque, aujourd’hui comme dans les années 50, c’est le Tour de France… Mais pour faire gagner leur champion Ribouldingue, pas question de trop se fatiguer. Le lecteur halluciné va alors assister à une succession de procédés de triche des plus intéressants, auxquels même Lance Armstrong n’aurait pas pensé !
        À l’occasion du 100e Tour de France, Vents d’Ouest réédite dans une belle édition vintage ce petit bijou publié en 1956. Un ouvrage qui ravira les amateurs de la Grande Boucle comme les amoureux de bande dessinée.");
        $livre->setEditeur($this->getReference(EditeurFixtures::VENTS_D_OUEST));
        $livre->setCategorie($this->getReference(CategorieFixtures::BD));
        $manager->persist($livre);
        $this->addReference(self::LES_PIEDS_NICKELES, $livre);

        $livre = new Livre();
        $livre->setTitre("Les Confidences d'Arsène Lupin");
        $livre->setImageName("les-confidences.jpg");
        $livre->setDescription("Les Confidences d'Arsène Lupin est un recueil de nouvelles de Maurice Leblanc mettant en scène les aventures d'Arsène Lupin, gentleman-cambrioleur. Après le noir 813, Maurice Leblanc revint aux nouvelles plus légères, dans le style de celles de son premier recueil, Arsène Lupin gentleman cambrioleur.");
        $livre->setEditeur($this->getReference(EditeurFixtures::HACHETTE));
        $livre->setCategorie($this->getReference(CategorieFixtures::POLAR));
        $manager->persist($livre);
        $this->addReference(self::LES_CONFIDENCES_D_ARSENE_LUPIN, $livre);

        $livre = new Livre();
        $livre->setTitre("Arsène Lupin Gentleman Cambrioleur");
        $livre->setImageName("gentleman-cambrioleur.jpg");
        $livre->setDescription("Arsène Lupin, gentleman-cambrioleur est un recueil de neuf nouvelles policières, écrites par Maurice Leblanc, qui constituent les premières aventures d'Arsène Lupin. La couverture en couleurs de l'édition originale est dessinée par Henri Goussé. ");
        $livre->setEditeur($this->getReference(EditeurFixtures::LAROUSSE));
        $livre->setCategorie($this->getReference(CategorieFixtures::POLAR));
        $manager->persist($livre);
        $this->addReference(self::ARSENE_LUPIN_GENTLEMAN_CAMBRIOLEUR, $livre);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            EditeurFixtures::class,
            CategorieFixtures::class
        ];
    }
}
