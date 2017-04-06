<?php

namespace esa\LeagueOfLegendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('esaLeagueOfLegendsBundle:Default:index.html.twig');
    }
}
