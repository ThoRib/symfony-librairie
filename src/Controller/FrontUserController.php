<?php

namespace App\Controller;

use App\Form\UserProfilType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontUserController extends AbstractController
{
    /**
     * @Route("/profil/user", name="app_front_user")
     */
    public function index(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserProfilType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();
            $this->addFlash("success", "Vos informations ont été mise à jour");
            return $this->redirectToRoute('app_front_user');
        }

        return $this->render('front_user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/add-favoris/{id}", name="add_favoris")
     */
    public function addFavoris(int $id, LivreRepository $livreRepository, EntityManagerInterface $entityManagerInterface) {
        $livre = $livreRepository->find($id);
        $user = $this->getUser();
        $user->addFavori($livre);
        $entityManagerInterface->persist($user);
        $entityManagerInterface->flush();
        return $this->redirectToRoute('app_front_user');
    }
}
