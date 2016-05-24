<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('JJWebbingBundle:Admin:admin.html.twig');
    }

}
