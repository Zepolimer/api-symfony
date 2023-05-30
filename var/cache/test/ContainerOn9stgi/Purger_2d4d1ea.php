<?php

namespace ContainerOn9stgi;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

class Purger_2d4d1ea extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33980 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c679 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63bdd = [
        
    ];

    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        return $this->valueHolder33980->create($mode, $purger);
    }

    public function purge() : void
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, 'purge', array(), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        $this->valueHolder33980->purge();
return;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializer5c679 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolder33980) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolder33980 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolder33980->__construct($manager, $purgeMode);
    }

    public function & __get($name)
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__get', ['name' => $name], $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        if (isset(self::$publicProperties63bdd[$name])) {
            return $this->valueHolder33980->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33980;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33980;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33980;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33980;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__isset', array('name' => $name), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33980;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33980;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__unset', array('name' => $name), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33980;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33980;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__clone', array(), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        $this->valueHolder33980 = clone $this->valueHolder33980;
    }

    public function __sleep()
    {
        $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, '__sleep', array(), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;

        return array('valueHolder33980');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5c679 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5c679;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5c679 && ($this->initializer5c679->__invoke($valueHolder33980, $this, 'initializeProxy', array(), $this->initializer5c679) || 1) && $this->valueHolder33980 = $valueHolder33980;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33980;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33980;
    }
}

if (!\class_exists('Purger_2d4d1ea', false)) {
    \class_alias(__NAMESPACE__.'\\Purger_2d4d1ea', 'Purger_2d4d1ea', false);
}
