<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need


        return $this->render('@App/default/index.html.twig');
    }

    /**
     * @Route("/feedback", name="feedback")
     */

    public function feedbackAction(){

        return $this->render('@App/default/feedback.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */

    public function contactAction(){

        return $this->render('@App/default/contact.html.twig');

    }



}
