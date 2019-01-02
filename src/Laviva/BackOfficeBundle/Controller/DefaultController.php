<?php

namespace Laviva\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LavivaBackOfficeBundle:Default:index.html.twig');
    }
}
