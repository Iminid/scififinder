<?php


namespace AppBundle\Controller;


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

        $films = [];
        for ($i=1; $i<=10; $i++){
            $films[] = rand(1,100);
        }

        return ['films' => $films];
    }

    /**
     * @Route("/films/{id}", name="film_item", requirements={"id": "[0-9]+"})
     * @Template()
     */

    public function viewAction($id){

       return ['id' => $id];



    }

}