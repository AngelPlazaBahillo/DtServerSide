<?php

namespace AngelPlaza\DatatablesServerSideBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AngelPlazaDatatablesServerSideBundle:Default:index.html.twig', array('name' => $name));
    }
}
