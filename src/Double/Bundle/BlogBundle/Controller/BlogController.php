<?php

namespace Double\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DoubleBlogBundle:Blog:index.html.twig', array('name' => $name));
    }
	
	public function addAction()
	{
		
	}
}
