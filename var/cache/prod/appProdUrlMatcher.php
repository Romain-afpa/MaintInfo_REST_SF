<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/api/articles')) {
            // get_articles
            if (preg_match('#^/api/articles(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_articles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_articles')), array (  '_controller' => 'ServiceBundle\\Controller\\ArticlesController::getArticlesAction',  '_format' => NULL,));
            }
            not_get_articles:

            // get_article
            if (preg_match('#^/api/articles/(?P<idArticle>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_article')), array (  '_controller' => 'ServiceBundle\\Controller\\ArticlesController::getArticleAction',  '_format' => NULL,));
            }
            not_get_article:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
