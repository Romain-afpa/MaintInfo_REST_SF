<?php

namespace ServiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ServiceBundle\Entity\Shopusers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Shopusers();
        //$user->setIdentifiant("roger");
        //$user->setMotdepasse("roger");
        //$user->setEmail("kljhghghdf@dkjg.com");
        //$user->setNom("roger Lebrun");

       // $em->persist($user);
        //$em->flush();
        $user = $em->getRepository("ServiceBundle:Shopusers")->findAll();
        var_dump($user);
        return new Response($user[0]->getNom());
    }
}
