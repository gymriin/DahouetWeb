<?php

namespace Proxies\__CG__\DahouetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proprietaire extends \DahouetBundle\Entity\Proprietaire implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'idmbr', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'idclub', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'nommbr', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'mail', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'password');
        }

        return array('__isInitialized__', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'idmbr', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'idclub', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'nommbr', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'mail', '' . "\0" . 'DahouetBundle\\Entity\\Proprietaire' . "\0" . 'password');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proprietaire $proxy) {
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
    public function getIdmbr()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdmbr();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmbr', array());

        return parent::getIdmbr();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdclub($idclub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdclub', array($idclub));

        return parent::setIdclub($idclub);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdclub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdclub', array());

        return parent::getIdclub();
    }

    /**
     * {@inheritDoc}
     */
    public function setNommbr($nommbr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNommbr', array($nommbr));

        return parent::setNommbr($nommbr);
    }

    /**
     * {@inheritDoc}
     */
    public function getNommbr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNommbr', array());

        return parent::getNommbr();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail($mail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', array($mail));

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', array());

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdmbr($idmbr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmbr', array($idmbr));

        return parent::setIdmbr($idmbr);
    }

}