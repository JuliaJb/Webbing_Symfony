<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotoController extends Controller
{
    public function photoAction()
    {
        return $this->render('JJWebbingBundle:Default:photo.html.twig');
    }

}
