<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need


        return $this->render('@App/default/index.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return Response
     */

    public function contactAction(Request $request){

        $form = $this->createForm(ContactType::class);
        $form->add('submit', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $contact = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $this->addFlash('success', 'Message sauvegardé !');

            return $this->redirectToRoute('contact');




        }


        return $this->render('@App/default/contact.html.twig',[
            'contact_form' => $form->createView()
        ]);

    }



}
