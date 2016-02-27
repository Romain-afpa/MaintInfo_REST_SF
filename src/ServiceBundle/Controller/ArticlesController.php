<?php

namespace ServiceBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ArticlesController extends FOSRestController
{




    public function getArticlesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository("ServiceBundle:Articles")->findAll();

       return array('articles' => $articles);
    }


    public function getArticleAction($idArticle)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository("ServiceBundle:Articles")->findOneBy(array('idArticle'=>$idArticle));

        return array('article' => $article);
    }
}
