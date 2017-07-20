<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        // return $this->render('PostBundle:Default:index.html.twig');

        $resp = $this->get('templating')->render('PostBundle:Default:index.html.twig');
        return new Response($resp);
    }

    /**
     * @Route("/list", name="list")
     */
    public function ListAction()
    {
        return $this->render('PostBundle:Default:post_list.html.twig');
    }

    /**
     * @Route("/post/{id}", name="post", requirements={"page": "\d+"})
     */
    public function DetailAction()
    {
        return $this->render('PostBundle:Default:post_detail.html.twig');
    }
}
