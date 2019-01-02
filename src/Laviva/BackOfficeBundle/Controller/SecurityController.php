<?php

namespace Laviva\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\request;

class SecurityController extends Controller
{

    public function AdminPageAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
        return $this->render('@LavivaBackOffice/AdminOffice/admin.html.twig');
        }
    }
    public function CrudPageAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
        return $this->render('@LavivaBackOffice/AdminOffice/crud.html.twig');
        }
    }


    public function LoginAction(request $request)
    {
        $authentificationUtils = $this->get('security.authentification_utils');
        $error = $authentificationUtils->getLastAuthentificationError();
        $lastUsername = $authentificationUtils->getLastUsername();

        if ($error){
            $this->addFlash('login','Error Login');
        }

        if (True === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->redirectionToRoute('back_office_admin');
        }

        if (True === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->redirectionToRoute('/');
        } else {
            return $this->render('FOSUserBundle:Security:login.html.twig', array('last_username' => $lastUsername,
                                                                                 'Error'         =>$error));
        }
    }
}
