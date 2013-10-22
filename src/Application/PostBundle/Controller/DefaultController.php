<?php

namespace Application\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationPostBundle:Default:index.html.twig', array('name' => $name));
    }
}
