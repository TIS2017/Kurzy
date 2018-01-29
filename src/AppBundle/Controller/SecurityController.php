<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 23.1.2018
 * Time: 12:44
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\CourseType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route("/", name="login")
     * @Method({"GET","POST"})
     */

    public function login(Request $request, AuthenticationUtils $authUtils)
    {




        if($this->getUser()){
            return $this->redirect('/coursetype');

        }
        else {
            // get the login error if there is one
            $error = $authUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authUtils->getLastUsername();

            return $this->render('security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error' => $error,
            ));
        }
    }
}