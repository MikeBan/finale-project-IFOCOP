<?php

namespace Laviva\MainBundle\Controller;

use Laviva\MainBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('LavivaMainBundle:User')->findAll();

        return $this->render('@LavivaMain/user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {

        return $this->render('@LavivaMain/user/show.html.twig', array(
            'user' => $user,
        ));
    }
}
