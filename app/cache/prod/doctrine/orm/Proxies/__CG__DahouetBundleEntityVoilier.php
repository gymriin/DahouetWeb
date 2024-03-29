<?php

namespace Proxies\__CG__\DahouetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Voilier extends \DahouetBundle\Entity\Voilier implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'numvoil', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'nomvoil', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'nbrpts', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'numclas', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'idmbr', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'cdochal');
        }

        return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'numvoil', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'nomvoil', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'nbrpts', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'numclas', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'idmbr', '' . "\0" . 'DahouetBundle\\Entity\\Voilier' . "\0" . 'cdochal');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Voilier $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getNumvoil()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNumvoil();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumvoil', array());

        return parent::getNumvoil();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomvoil($nomvoil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomvoil', array($nomvoil));

        return parent::setNomvoil($nomvoil);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomvoil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomvoil', array());

        return parent::getNomvoil();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrpts($nbrpts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrpts', array($nbrpts));

        return parent::setNbrpts($nbrpts);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrpts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrpts', array());

        return parent::getNbrpts();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumclas(\DahouetBundle\Entity\Classe $numclas = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumclas', array($numclas));

        return parent::setNumclas($numclas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumclas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumclas', array());

        return parent::getNumclas();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmbr(\DahouetBundle\Entity\Proprietaire $idmbr = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmbr', array($idmbr));

        return parent::setIdmbr($idmbr);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmbr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmbr', array());

        return parent::getIdmbr();
    }

    /**
     * {@inheritDoc}
     */
    public function addCdochal(\DahouetBundle\Entity\Challenge $cdochal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCdochal', array($cdochal));

        return parent::addCdochal($cdochal);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCdochal(\DahouetBundle\Entity\Challenge $cdochal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCdochal', array($cdochal));

        return parent::removeCdochal($cdochal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCdochal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCdochal', array());

        return parent::getCdochal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumvoil($numvoil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumvoil', array($numvoil));

        return parent::setNumvoil($numvoil);
    }

}
