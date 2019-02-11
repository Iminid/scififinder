<?php


namespace AppBundle\Controller;


use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news_list")
     * @Template()
     */
    public function indexAction (){

        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findAll();


        return ['news' => $news];

    }

    /**
     * @Route("/news/{id}", name="news_item", requirements={"id"="[0-9]+"})
     * @Template()
     * @param News $news
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(News $news){



        return ['news'=>$news];



    }

}