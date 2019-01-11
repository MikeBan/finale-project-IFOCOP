<?php

namespace Laviva\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function ShoppingAction(request $request)
    {
        return $this->render('@LavivaFrontOffice/ShoppingCard/ShoppingCard.html.twig');
    }
}