<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Utilisateur;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use DateTime;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Projet;

class ProjDispoController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

       

    #[Route('/proj', name: 'app_proj_dispo')]
    public function accueil(Request $request): Response
    {

        $projetRepository = $this->entityManager->getRepository(Projet::class);
        $projets = $projetRepository->findAll();
        $session = $request->getSession();
        $id = $session->get('id') ?? "wazaaa";
        if (!$session->has('adresseMail')) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('proj_dispo/index.html.twig', [
            'projets' => $projets,
            'id' => $id,
        ]);




        
        

    
}
}

