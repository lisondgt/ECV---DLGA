<?php

namespace ContainerMsGxYxQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbe30b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera9231 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca659 = [
        
    ];

    public function getConnection()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getConnection', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getMetadataFactory', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getExpressionBuilder', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'beginTransaction', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getCache', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'transactional', array('func' => $func), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'commit', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->commit();
    }

    public function rollback()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'rollback', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getClassMetadata', array('className' => $className), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'createQuery', array('dql' => $dql), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'createNamedQuery', array('name' => $name), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'createQueryBuilder', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'flush', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'clear', array('entityName' => $entityName), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->clear($entityName);
    }

    public function close()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'close', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->close();
    }

    public function persist($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'persist', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'remove', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'refresh', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'detach', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'merge', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'contains', array('entity' => $entity), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getEventManager', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getConfiguration', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'isOpen', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getUnitOfWork', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getProxyFactory', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'initializeObject', array('obj' => $obj), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'getFilters', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'isFiltersStateClean', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'hasFilters', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return $this->valueHolderbe30b->hasFilters();
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

        $instance->initializera9231 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbe30b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbe30b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbe30b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__get', ['name' => $name], $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        if (isset(self::$publicPropertiesca659[$name])) {
            return $this->valueHolderbe30b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe30b;

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

        $targetObject = $this->valueHolderbe30b;
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
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe30b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbe30b;
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
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__isset', array('name' => $name), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe30b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbe30b;
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
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__unset', array('name' => $name), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe30b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbe30b;
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
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__clone', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        $this->valueHolderbe30b = clone $this->valueHolderbe30b;
    }

    public function __sleep()
    {
        $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, '__sleep', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;

        return array('valueHolderbe30b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera9231 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera9231;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera9231 && ($this->initializera9231->__invoke($valueHolderbe30b, $this, 'initializeProxy', array(), $this->initializera9231) || 1) && $this->valueHolderbe30b = $valueHolderbe30b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbe30b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbe30b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
