<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('JJWebbingBundle:Default:home.html.twig');
    }

    public function mauriceAction()
    {
        return $this->render('JJWebbingBundle:Default:maurice.html.twig');
    }

    public function franceAction()
    {
        return $this->render('JJWebbingBundle:Default:france.html.twig');
    }
}
