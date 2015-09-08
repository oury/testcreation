<?php
/**
 * Created by PhpStorm.
 * User: HGQK0815
 * Date: 07/09/2015
 * Time: 11:46
 */

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller{

    public function indexAction(){
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        return new Response($content);
    }

}