<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function forumAction()
    {
        return $this->render('JJWebbingBundle:Default:forum.html.twig');
    }

}
