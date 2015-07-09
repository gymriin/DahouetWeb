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

        // dahouet_homepage
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_homepage');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dahouet_homepage',);
        }

        // dahouet_inscription
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_inscription');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\InscriptionController::regateAction',  '_route' => 'dahouet_inscription',);
        }

        // dahouet_logout
        if (rtrim($pathinfo, '/') === '/logout') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_logout');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\LogController::logoutAction',  '_route' => 'dahouet_logout',);
        }

        // dahouet_noinscription
        if (rtrim($pathinfo, '/') === '/noinscription') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_noinscription');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\DefaultController::noinscriptionAction',  '_route' => 'dahouet_noinscription',);
        }

        // dahouet_retour
        if (rtrim($pathinfo, '/') === '/retour') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_retour');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\DefaultController::retourAction',  '_route' => 'dahouet_retour',);
        }

        // dahouet_enConstruction
        if (rtrim($pathinfo, '/') === '/enConstruction') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_enConstruction');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\NoConstructController::enConstructionAction',  '_route' => 'dahouet_enConstruction',);
        }

        // dahouet_voilier
        if (rtrim($pathinfo, '/') === '/voilier') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahouet_voilier');
            }

            return array (  '_controller' => 'DahouetBundle\\Controller\\InscriptionController::voilierAction',  '_route' => 'dahouet_voilier',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
