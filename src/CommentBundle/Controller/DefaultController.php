<?php

namespace CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // return $this->render('CommentBundle:Default:index.html.twig');
        return new Response("Hello World !");
    }
}
