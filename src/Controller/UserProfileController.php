<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\PostRepository;


final class UserProfileController extends AbstractController
{
    #[Route('/minha-conta', name: 'app_user_profile')]
    public function index(PostRepository $postRepository): Response {
        $user = $this->getUser();
        $posts = $postRepository->findBy(['author' => $user]);

        return $this->render('user_profile/index.html.twig', [
            'posts' => $posts,
            'user' => $user
        ]);
    }

    #[Route('/minha-conta', name: 'app_user_account')]
    #[IsGranted('ROLE_USER')]
    public function myAccount(PostRepository $postRepository): Response
        {
        $user = $this->getUser();

        
        $posts = $postRepository->findBy(['author' => $user], ['createdAt' => 'DESC']);

        return $this->render('user/account.html.twig', [
            'posts' => $posts,
        ]);
    }
}
