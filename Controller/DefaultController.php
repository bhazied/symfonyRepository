<?php

namespace Goup\RepositoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GoupRepositoryBundle:Default:index.html.twig');
    }
}
