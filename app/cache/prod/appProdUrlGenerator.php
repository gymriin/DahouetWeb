<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'dahouet_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\InscriptionController::regateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\LogController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_noinscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\DefaultController::noinscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noinscription/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_retour' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\DefaultController::retourAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/retour/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_enConstruction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\NoConstructController::enConstructionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enConstruction/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahouet_voilier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DahouetBundle\\Controller\\InscriptionController::voilierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voilier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
