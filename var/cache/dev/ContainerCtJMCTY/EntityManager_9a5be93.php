<?php

namespace ContainerCtJMCTY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54605 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere7dc3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties02e6c = [
        
    ];

    public function getConnection()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getConnection', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getMetadataFactory', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getExpressionBuilder', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'beginTransaction', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getCache', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getCache();
    }

    public function transactional($func)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'transactional', array('func' => $func), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'wrapInTransaction', array('func' => $func), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'commit', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->commit();
    }

    public function rollback()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'rollback', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getClassMetadata', array('className' => $className), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'createQuery', array('dql' => $dql), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'createNamedQuery', array('name' => $name), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'createQueryBuilder', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'flush', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'clear', array('entityName' => $entityName), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->clear($entityName);
    }

    public function close()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'close', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->close();
    }

    public function persist($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'persist', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'remove', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'refresh', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'detach', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'merge', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getRepository', array('entityName' => $entityName), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'contains', array('entity' => $entity), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getEventManager', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getConfiguration', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'isOpen', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getUnitOfWork', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getProxyFactory', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'initializeObject', array('obj' => $obj), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'getFilters', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'isFiltersStateClean', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'hasFilters', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return $this->valueHolder54605->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere7dc3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54605) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54605 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54605->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__get', ['name' => $name], $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        if (isset(self::$publicProperties02e6c[$name])) {
            return $this->valueHolder54605->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54605;

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

        $targetObject = $this->valueHolder54605;
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
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54605;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54605;
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
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__isset', array('name' => $name), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54605;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54605;
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
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__unset', array('name' => $name), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54605;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54605;
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
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__clone', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        $this->valueHolder54605 = clone $this->valueHolder54605;
    }

    public function __sleep()
    {
        $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, '__sleep', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;

        return array('valueHolder54605');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere7dc3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere7dc3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere7dc3 && ($this->initializere7dc3->__invoke($valueHolder54605, $this, 'initializeProxy', array(), $this->initializere7dc3) || 1) && $this->valueHolder54605 = $valueHolder54605;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54605;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54605;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
