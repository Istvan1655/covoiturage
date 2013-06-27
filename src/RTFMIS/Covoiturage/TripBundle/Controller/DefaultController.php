<?php

namespace RTFMIS\Covoiturage\TripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RTFMISCovoiturageTripBundle:Default:index.html.twig', array('name' => $name));
    }
}
