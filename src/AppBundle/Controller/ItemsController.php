<?php
/**
 * Created by PhpStorm.
 * User: mikhail
 * Date: 8/01/19
 * Time: 1:18
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemsController extends Controller
{
    /**
     * @Route("/items", name="items_list")
     */
    public function indexAction(){

        die('123');

    }
    public function showAction(){

        die('345');

    }

}