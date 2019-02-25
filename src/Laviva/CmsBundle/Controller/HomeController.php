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

    public function aboutAction()
    {
        return $this->render('@LavivaCms/Homepage/about.html.twig');
    }

    public function cgvAction()
    {
        return $this->render('@LavivaCms/Homepage/CGV.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@LavivaCms/Homepage/contact.html.twig');
    }
    
    public function sitemapAction()
    {
        return $this->render('@LavivaCms/Homepage/sitemap.html.twig');
    }
}