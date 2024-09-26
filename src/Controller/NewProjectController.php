<?php

namespace App\Controller;

use App\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class NewProjectController extends AbstractController
{
    #[Route('/newproject', name: 'app_new_project')]
    public function index(): Response
    {
        return $this->render('new_project/index.html.twig', [
            'controller_name' => 'NewProjectController',
        ]);
    }

    #[Route('/addprojetct', name: 'app_addnew_project')]
    public function addProject(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nom = $request->request->get('titre');
        $description = $request->request->get('description');
        $image = $request->request->get('image');

        $projet = new Projet();
        $projet->setTitre($nom);
        $projet->setDescription($description);
        $projet->setNomImage($image);

        $entityManager->persist($projet);
        $entityManager->flush();

        return $this->redirectToRoute('app_proj_dispo');
    }

    #[Route('/joinproject', name: 'app_join_project', methods: "POST")]
    public function joinProject(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id_projet = $request->request->get('id_projet');
        $id_personne = $request->request->get('id_personne');
        var_dump($id_projet);
        var_dump($id_personne);

        $projetRepository = $entityManager->getRepository(Participation::class);
        $projet = $projetRepository->findOneBy(['id_projet' => $id_projet, 'id_personne' => $id_personne]);

        if (!$projet) {
            $participation = new Participation();
            $participation->setIdPersonne((int)$id_personne);
            $participation->setIdProjet((int)$id_projet);
            
            $entityManager->persist($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_my_project');
    }

}
