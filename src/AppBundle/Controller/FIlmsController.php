<?php


namespace AppBundle\Controller;


use AppBundle\AppBundle;
use AppBundle\Entity\films;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FIlmsController extends Controller
{
    /**
     * @Route("/films", name="films_list")
     * @Template()
     */
    public function indexAction(){

        $films = $this->getDoctrine()->getRepository('AppBundle:films')->findAll();
        /*dump($films);
        die();


        $films = [];
        for ($i=1; $i<=12; $i++){
            $films[] = rand(1,100);
        }*/

        return ['films' => $films];
    }

    /**
     * @Route("/films/{id}", name="film_item", requirements={"id": "[0-9]+"})
     * @Template()
     * @param $id
     * @return array
     */

    public function viewAction($id){

        $film = $this->getDoctrine()->getRepository('AppBundle:films')->find($id);

       return ['film' => $film];



    }

}