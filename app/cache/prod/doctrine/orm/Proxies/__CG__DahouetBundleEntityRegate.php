<?php

namespace Proxies\__CG__\DahouetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Regate extends \DahouetBundle\Entity\Regate implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'numreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'libreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'datreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'lieureg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'distance', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'heurdep', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'cdochal', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'codcommission', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'codcom');
        }

        return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'numreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'libreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'datreg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'lieureg', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'distance', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'heurdep', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'cdochal', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'codcommission', '' . "\0" . 'DahouetBundle\\Entity\\Regate' . "\0" . 'codcom');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Regate $proxy) {
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
    public function getNumreg()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getNumreg();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumreg', array());

        return parent::getNumreg();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibreg($libreg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibreg', array($libreg));

        return parent::setLibreg($libreg);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibreg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibreg', array());

        return parent::getLibreg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatreg($datreg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatreg', array($datreg));

        return parent::setDatreg($datreg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatreg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatreg', array());

        return parent::getDatreg();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieureg($lieureg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieureg', array($lieureg));

        return parent::setLieureg($lieureg);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieureg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieureg', array());

        return parent::getLieureg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDistance($distance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDistance', array($distance));

        return parent::setDistance($distance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistance', array());

        return parent::getDistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeurdep($heurdep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeurdep', array($heurdep));

        return parent::setHeurdep($heurdep);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeurdep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeurdep', array());

        return parent::getHeurdep();
    }

    /**
     * {@inheritDoc}
     */
    public function setCdochal(\DahouetBundle\Entity\Challenge $cdochal = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCdochal', array($cdochal));

        return parent::setCdochal($cdochal);
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
    public function setCodcommission(\DahouetBundle\Entity\Commissaire $codcommission = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodcommission', array($codcommission));

        return parent::setCodcommission($codcommission);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodcommission()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodcommission', array());

        return parent::getCodcommission();
    }

    /**
     * {@inheritDoc}
     */
    public function addCodcom(\DahouetBundle\Entity\Commissaire $codcom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCodcom', array($codcom));

        return parent::addCodcom($codcom);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCodcom(\DahouetBundle\Entity\Commissaire $codcom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCodcom', array($codcom));

        return parent::removeCodcom($codcom);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodcom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodcom', array());

        return parent::getCodcom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumreg($numreg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumreg', array($numreg));

        return parent::setNumreg($numreg);
    }

}
