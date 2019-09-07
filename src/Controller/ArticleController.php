<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    public function show($slug)
    {
        $comments = [
            'comentario 1',
            'mas comentarios',
            'otro comentario un poco mas largo'
        ];
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}