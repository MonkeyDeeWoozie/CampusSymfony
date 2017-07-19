<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('PostBundle:Default:index.html.twig');
    }

    /**
     * @Route("/post_list", name="list")
     */
    public function ListingAction()
    {
        return $this->render('PostBundle:Default:post_list.html.twig');
    }
}
