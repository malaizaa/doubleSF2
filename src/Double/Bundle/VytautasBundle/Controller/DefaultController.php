<?php

namespace Double\Bundle\VytautasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('DoubleVytautasBundle:Default:index.html.twig', array('name' => $id));
    }
}
