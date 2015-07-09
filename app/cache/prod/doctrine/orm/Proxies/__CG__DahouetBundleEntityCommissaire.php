<?php

namespace Proxies\__CG__\DahouetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commissaire extends \DahouetBundle\Entity\Commissaire implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'codcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'nomcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'precom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'mailcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'comitecom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'numreg');
        }

        return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'codcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'nomcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'precom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'mailcom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'comitecom', '' . "\0" . 'DahouetBundle\\Entity\\Commissaire' . "\0" . 'numreg');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commissaire $proxy) {
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
    public function getCodcom()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodcom();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodcom', array());

        return parent::getCodcom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomcom($nomcom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomcom', array($nomcom));

        return parent::setNomcom($nomcom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomcom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomcom', array());

        return parent::getNomcom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecom($precom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecom', array($precom));

        return parent::setPrecom($precom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecom', array());

        return parent::getPrecom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailcom($mailcom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailcom', array($mailcom));

        return parent::setMailcom($mailcom);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailcom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailcom', array());

        return parent::getMailcom();
    }

    /**
     * {@inheritDoc}
     */
    public function setComitecom($comitecom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComitecom', array($comitecom));

        return parent::setComitecom($comitecom);
    }

    /**
     * {@inheritDoc}
     */
    public function getComitecom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComitecom', array());

        return parent::getComitecom();
    }

    /**
     * {@inheritDoc}
     */
    public function addNumreg(\DahouetBundle\Entity\Regate $numreg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNumreg', array($numreg));

        return parent::addNumreg($numreg);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNumreg(\DahouetBundle\Entity\Regate $numreg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNumreg', array($numreg));

        return parent::removeNumreg($numreg);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumreg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumreg', array());

        return parent::getNumreg();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodcom($codcom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodcom', array($codcom));

        return parent::setCodcom($codcom);
    }

}
