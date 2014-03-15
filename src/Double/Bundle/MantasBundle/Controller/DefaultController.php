<?php

namespace Double\Bundle\MantasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('DoubleMantasBundle:Default:index.html.twig', array('id' => $id));
    }
}
