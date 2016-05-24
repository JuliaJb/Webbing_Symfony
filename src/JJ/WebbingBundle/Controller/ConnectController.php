<?php

namespace JJ\WebbingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnectController extends Controller
{
    public function mon_profilAction()
    {
        return $this->render('JJWebbingBundle:Connect:mon_profil.html.twig');
    }

}
