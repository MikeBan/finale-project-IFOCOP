<?php

namespace Laviva\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LavivaFrontOfficeBundle:Default:index.html.twig');
    }

    public function UserProfileAction()
    {
        return $this->render('@FOSUser/Profile/show.html.twig');
    }
}
