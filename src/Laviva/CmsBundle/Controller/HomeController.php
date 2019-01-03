<?php

namespace Laviva\CmsBundle\Controller;

use Laviva\BackOfficeBundle\Entity\product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\File;


class HomeController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('LavivaBackOfficeBundle:product')->findAll();

        return $this->render('@LavivaCms/Homepage/home.html.twig', array(
            'products' => $products,
        ));
    }
}