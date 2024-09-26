<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Participation;
use App\Entity\Projet;


class MyProjectController extends AbstractController
{
    #[Route('/myproject', name: 'app_my_project')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $session = $request->getSession();
        $id = $session->get('id') ?? "wazaaa";
        if (!$session->has('adresseMail')) {
            return $this->redirectToRoute('app_login');
        }
        $repository = $entityManager->getRepository(Participation::class);
        $participations = $repository->findBy(['id_personne' => $id]);

        $idProjets = [];
        foreach ($participations as $participation) {
            $idProjets[] = $participation->getIdProjet();
        }
        $projects = [];
        foreach ($idProjets as $idProjet) {
            $project = $entityManager->getRepository(Projet::class)->find($idProjet);
            if ($project) {
                $projects[] = $project;
            }
        }

        return $this->render('my_project/index.html.twig', [
            'controller_name' => 'MyProjectController',
            'projets' => $projects,
        ]);

  
    }
}
