<?php

namespace Proxies\__CG__\Filmweb\WebsiteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Zamowienia extends \Filmweb\WebsiteBundle\Entity\Zamowienia implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'dataZamowienia', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'dataZwrotu', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'id', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idUzytkownik', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idFilm', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idStatus');
        }

        return array('__isInitialized__', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'dataZamowienia', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'dataZwrotu', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'id', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idUzytkownik', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idFilm', '' . "\0" . 'Filmweb\\WebsiteBundle\\Entity\\Zamowienia' . "\0" . 'idStatus');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Zamowienia $proxy) {
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
    public function setDataZamowienia($dataZamowienia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataZamowienia', array($dataZamowienia));

        return parent::setDataZamowienia($dataZamowienia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataZamowienia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataZamowienia', array());

        return parent::getDataZamowienia();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataZwrotu($dataZwrotu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataZwrotu', array($dataZwrotu));

        return parent::setDataZwrotu($dataZwrotu);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataZwrotu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataZwrotu', array());

        return parent::getDataZwrotu();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUzytkownik(\Filmweb\UserBundle\Entity\User $idUzytkownik = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUzytkownik', array($idUzytkownik));

        return parent::setIdUzytkownik($idUzytkownik);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUzytkownik()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUzytkownik', array());

        return parent::getIdUzytkownik();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdFilm(\Filmweb\WebsiteBundle\Entity\Filmy $idFilm = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdFilm', array($idFilm));

        return parent::setIdFilm($idFilm);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdFilm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFilm', array());

        return parent::getIdFilm();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdStatus(\Filmweb\WebsiteBundle\Entity\Statuszamowienia $idStatus = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdStatus', array($idStatus));

        return parent::setIdStatus($idStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdStatus', array());

        return parent::getIdStatus();
    }

}
