<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class SecurityController extends AbstractController
{
    #[Route('/register', name: 'app_security', methods:'POST')]
    public function index(
        EntityManagerInterface $entityManager,
        Request $request,
        UserPasswordHasherInterface $passwordHash
    ): Response
    {
        $user = new Utilisateur();
        $hashedPassword = $passwordHash->hashPassword(
            $user,
            $request->request->get('password')
        );
        $user->setName($request->request->get('nom')." ".$request->request->get('prenom'));
        $user->setAdresse($request->request->get('adresse'));
        $user->setTelephone($request->request->get('telephone'));
        $user->setPassword($hashedPassword);
        $user->setUsername($request->request->get('username'));
        if ($request->request->get('role')) {
            $user->setRoles([$request->request->get('role')]);
        }
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json(['message' => 'EnRegistrement avec succès',]);
    }
}