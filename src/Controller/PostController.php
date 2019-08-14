<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route()
     */
    public function home()
    {
        return new Response('Hello tech yogi friends!!');
    }

    /**
     * @Route("/blog/{post}")
     */
    public function showPost($post)
    {
        // return new Response(sprintf('Future page to show: "%s"', $post));
        return $this->render('posts/post.html.twig', [
            'title' => ucwords(str_replace('-','',$post))
        ]);
    }
}