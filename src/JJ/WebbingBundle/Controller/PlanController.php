<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanController extends Controller
{
    public function planAction()
    {
        return $this->render('JJWebbingBundle:Default:plan.html.twig');
    }

}
