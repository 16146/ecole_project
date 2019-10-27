<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InfoStudents extends \App\Entity\InfoStudents implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
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
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'id', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'name_student', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'firstname_student', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'birthday'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'id', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'name_student', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'firstname_student', '' . "\0" . 'App\\Entity\\InfoStudents' . "\0" . 'birthday'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InfoStudents $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdStudent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdStudent', []);

        return parent::getIdStudent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdStudent(string $id_student): \App\Entity\InfoStudents
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdStudent', [$id_student]);

        return parent::setIdStudent($id_student);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameStudent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameStudent', []);

        return parent::getNameStudent();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameStudent(string $name_student): \App\Entity\InfoStudents
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameStudent', [$name_student]);

        return parent::setNameStudent($name_student);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstnameStudent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstnameStudent', []);

        return parent::getFirstnameStudent();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstnameStudent(string $firstname_student): \App\Entity\InfoStudents
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstnameStudent', [$firstname_student]);

        return parent::setFirstnameStudent($firstname_student);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday(string $birthday): \App\Entity\InfoStudents
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

}