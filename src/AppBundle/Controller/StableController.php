<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StableController extends Controller
{
    /**
     * @Route("/stable")
     */
    public function indexAction()
    {

        return $this->render('stable/index.html.twig');
    }
}