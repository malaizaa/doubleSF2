<?php

namespace Double\Bundle\JuliusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('DoubleJuliusBundle:Default:index.html.twig', array('name' => $id));
    }
}
