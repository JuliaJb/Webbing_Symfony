<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('JJWebbingBundle:Default:home.html.twig');
    }

    public function loginAction()
    {
        return $this->render('JJWebbingBundle:Default:login.html.twig');
    }

    public function profilAction()
    {
        return $this->render('JJWebbingBundle:Default:profil.html.twig');
    }
}
