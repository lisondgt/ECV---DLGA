<?php

namespace ContainerOxcLJW6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf71e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer995da = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05b8e = [
        
    ];

    public function getConnection()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getConnection', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getMetadataFactory', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getExpressionBuilder', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'beginTransaction', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getCache', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'transactional', array('func' => $func), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'commit', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->commit();
    }

    public function rollback()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'rollback', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getClassMetadata', array('className' => $className), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'createQuery', array('dql' => $dql), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'createNamedQuery', array('name' => $name), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'createQueryBuilder', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'flush', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'clear', array('entityName' => $entityName), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->clear($entityName);
    }

    public function close()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'close', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->close();
    }

    public function persist($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'persist', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'remove', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'refresh', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'detach', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'merge', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'contains', array('entity' => $entity), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getEventManager', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getConfiguration', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'isOpen', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getUnitOfWork', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getProxyFactory', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'initializeObject', array('obj' => $obj), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'getFilters', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'isFiltersStateClean', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'hasFilters', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return $this->valueHolderbf71e->hasFilters();
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

        $instance->initializer995da = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbf71e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbf71e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbf71e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__get', ['name' => $name], $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        if (isset(self::$publicProperties05b8e[$name])) {
            return $this->valueHolderbf71e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf71e;

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

        $targetObject = $this->valueHolderbf71e;
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
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf71e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf71e;
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
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__isset', array('name' => $name), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf71e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf71e;
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
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__unset', array('name' => $name), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf71e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf71e;
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
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__clone', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        $this->valueHolderbf71e = clone $this->valueHolderbf71e;
    }

    public function __sleep()
    {
        $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, '__sleep', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;

        return array('valueHolderbf71e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer995da = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer995da;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer995da && ($this->initializer995da->__invoke($valueHolderbf71e, $this, 'initializeProxy', array(), $this->initializer995da) || 1) && $this->valueHolderbf71e = $valueHolderbf71e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf71e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf71e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
