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

        $users = $em->getRepository("ServiceBundle:Shopusers")->findAll();
        var_dump($users);
        return new Response($users[0]->getNom());
    }
}
