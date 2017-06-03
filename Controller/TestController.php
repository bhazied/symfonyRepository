<?php

namespace Goup\RepositoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;
class TestController extends Controller
{

    /**
     * @Route("/test")
     */
    public function indexAction(Request $request)
    {
        return new Response('Test');
    }
}
