<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Films;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemsController extends Controller
{
    /**
     * @Route("/films", name="films_list")
     * @Template()
     */
    public function filmsAction(){

        $films = $this->getDoctrine()->getRepository('AppBundle:Films')->findAll();

        return $this->render('@App/items/films/films.html.twig', ['films' => $films]);
    }

    /**
     * @Route("/films/{id}", name="films_item", requirements={"id":"[0-9]+"})
     * @param Films $films
     * @return array
     */
    public function viewfilmsAction($id){

        $film = $this->getDoctrine()->getRepository('AppBundle:Films')->find($id);

        return $this->render('@App/items/films/viewfilms.html.twig', ['films' => $film]);

    }

    /**
     * @Route("/series", name="series_list")
     */
    public function seriesAction(){
        return $this->render('@App/items/series/series.html.twig');
    }
    public function viewseriesAction(){

    }


    /**
     * @Route("/books", name="books_list")
     */
    public function booksAction(){
        return $this->render('@App/items/books/books.html.twig');
    }
    public function viewbooksAction(){

    }


}