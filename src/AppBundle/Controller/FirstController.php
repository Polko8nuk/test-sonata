<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FirstController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:First:index.html.twig', array(
            // ...
        ));
    }

}
