<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('Login/index.html.twig');
    }

    #[Route('/verification', name: 'app_verification')]
    public function verification(Request $request, Session $session): Response
    {
        $email = $request->request->get('email'); //nom dans le formulaire
        $password = $request->request->get('password'); //nom dans le formulaire
        $error = null;

        //check si l'utilisateur existe
        $user = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['Adresse_mail' => $email]);
        if (!$user || !password_verify($password, $user->getMotDePasse())) {
            $this->addFlash('error', 'Identifiants incorrects');
            $error = "Identifiants incorrects";

            return $this->render('/Login/error.html.twig', [
                'error' => $error,
            ]);
        }
        $session = $request->getSession();
        $session->start();
        $session->set('role', $user->getIdRole());
        $session->set('id', $user->getId());
        $session->set('adresseMail', $user->getAdresseMail());
        return $this->redirectToRoute('app_accueil');

    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pseudo = $request->request->get('pseudo');
        $adresse_mail = $request->request->get('adresse_mail');
        $mot_de_passe = $request->request->get('mot_de_passe');
        $id_user_default = 2; // Client par défaut

        // On vérifie si l'utilisateur existe déjà
        $existingUser = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['Adresse_mail' => $adresse_mail]);
        if ($existingUser) {
            $this->addFlash('error', 'Adresse e-mail déjà utilisée. Veuillez utiliser une autre adresse e-mail.');
            return $this->redirectToRoute('app_enregistrement_error');
        }

        $hashedPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $utilisateur = new Utilisateur();
        $utilisateur->setPseudo($pseudo);
        $utilisateur->setAdresseMail($adresse_mail);
        $utilisateur->setMotDePasse($hashedPassword);
        $utilisateur->setIdRole($id_user_default);

        $entityManager->persist($utilisateur);
        $entityManager->flush();

        return $this->render('/Login/register_success.html.twig');
    }

    #[Route('/enregistrement', name: 'app_enregistrement')]
    public function enregistrement(): Response
    {
        return $this->render('Login/register.html.twig');
    }

    #[Route('/enregistrement_error', name: 'app_enregistrement_error')]
    public function enregistrement_error(): Response
    {
        return $this->render('Login/register_error.html.twig');
    }

    #[Route('/deconnexion', name: 'app_logout')]
    public function deconnexion(Session $session): Response
    {
        $session->invalidate();
        return $this->redirectToRoute('app_login');
    }
}