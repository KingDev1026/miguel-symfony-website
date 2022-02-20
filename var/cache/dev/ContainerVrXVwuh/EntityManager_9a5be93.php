<?php

namespace ContainerVrXVwuh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera6d76 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera16db = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdf9b4 = [
        
    ];

    public function getConnection()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getConnection', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getMetadataFactory', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getExpressionBuilder', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'beginTransaction', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getCache', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getCache();
    }

    public function transactional($func)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'transactional', array('func' => $func), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'wrapInTransaction', array('func' => $func), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'commit', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->commit();
    }

    public function rollback()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'rollback', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getClassMetadata', array('className' => $className), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'createQuery', array('dql' => $dql), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'createNamedQuery', array('name' => $name), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'createQueryBuilder', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'flush', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'clear', array('entityName' => $entityName), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->clear($entityName);
    }

    public function close()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'close', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->close();
    }

    public function persist($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'persist', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'remove', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'refresh', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'detach', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'merge', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getRepository', array('entityName' => $entityName), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'contains', array('entity' => $entity), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getEventManager', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getConfiguration', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'isOpen', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getUnitOfWork', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getProxyFactory', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'initializeObject', array('obj' => $obj), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'getFilters', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'isFiltersStateClean', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'hasFilters', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return $this->valueHoldera6d76->hasFilters();
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

        $instance->initializera16db = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera6d76) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6d76 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera6d76->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__get', ['name' => $name], $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        if (isset(self::$publicPropertiesdf9b4[$name])) {
            return $this->valueHoldera6d76->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6d76;

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

        $targetObject = $this->valueHoldera6d76;
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
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6d76;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera6d76;
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
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__isset', array('name' => $name), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6d76;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera6d76;
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
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__unset', array('name' => $name), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6d76;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera6d76;
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
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__clone', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        $this->valueHoldera6d76 = clone $this->valueHoldera6d76;
    }

    public function __sleep()
    {
        $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, '__sleep', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;

        return array('valueHoldera6d76');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera16db = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera16db;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera16db && ($this->initializera16db->__invoke($valueHoldera6d76, $this, 'initializeProxy', array(), $this->initializera16db) || 1) && $this->valueHoldera6d76 = $valueHoldera6d76;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6d76;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6d76;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
