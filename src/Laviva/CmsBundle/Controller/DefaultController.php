<?php

namespace Laviva\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@LavivaCms/Homepage/home.html.twig');
    }
}
