<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemoController extends AbstractController
{
    #[Route('/', name: 'app_demo')]
    public function index(EntityManagerInterface $em, PostRepository $postRepository): Response
    {
        // Step 1:
        // $post = new Post;
        // $post->setTitle('mon titre en français');
        // $post->setContent('mon contenu en français');
        // $post->setTranslatableLocale('fr_fr'); // change locale
        // $em->persist($post);
        // $em->flush();

        // $post = $postRepository->find(1);
        // $post->setTitle('my title in english');
        // $post->setContent('my content in english');
        // $post->setTranslatableLocale('en_us'); // change locale
        // $em->persist($post);
        // $em->flush();
        
        // Example 1:
        // $post = $postRepository->find(1);
        // $post->setTranslatableLocale('fr_fr');
        // $em->refresh($post);
        // dd($post);

        // Example 2:
        // $post = $postRepository->find(1);
        // $post->setTranslatableLocale('en_us');
        // $em->refresh($post);
        // dd($post);

        // Example 3:
        // $post = $postRepository->find(1);
        // $repository = $em->getRepository('Gedmo\Translatable\Entity\Translation');
        // $translations = $repository->findTranslations($post);
        // dd($translations);

        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}
