<?php

namespace RTFMIS\Covoiturage\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CovoitUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
