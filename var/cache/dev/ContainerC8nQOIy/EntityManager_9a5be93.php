<?php

namespace ContainerC8nQOIy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder72490 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer94d8e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc436c = [
        
    ];

    public function getConnection()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getConnection', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getMetadataFactory', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getExpressionBuilder', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'beginTransaction', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getCache', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getCache();
    }

    public function transactional($func)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'transactional', array('func' => $func), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'wrapInTransaction', array('func' => $func), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'commit', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->commit();
    }

    public function rollback()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'rollback', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getClassMetadata', array('className' => $className), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'createQuery', array('dql' => $dql), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'createNamedQuery', array('name' => $name), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'createQueryBuilder', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'flush', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'clear', array('entityName' => $entityName), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->clear($entityName);
    }

    public function close()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'close', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->close();
    }

    public function persist($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'persist', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'remove', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'refresh', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'detach', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'merge', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getRepository', array('entityName' => $entityName), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'contains', array('entity' => $entity), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getEventManager', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getConfiguration', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'isOpen', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getUnitOfWork', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getProxyFactory', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'initializeObject', array('obj' => $obj), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'getFilters', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'isFiltersStateClean', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'hasFilters', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return $this->valueHolder72490->hasFilters();
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

        $instance->initializer94d8e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder72490) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder72490 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder72490->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__get', ['name' => $name], $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        if (isset(self::$publicPropertiesc436c[$name])) {
            return $this->valueHolder72490->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72490;

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

        $targetObject = $this->valueHolder72490;
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
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72490;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder72490;
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
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__isset', array('name' => $name), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72490;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder72490;
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
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__unset', array('name' => $name), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72490;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder72490;
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
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__clone', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        $this->valueHolder72490 = clone $this->valueHolder72490;
    }

    public function __sleep()
    {
        $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, '__sleep', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;

        return array('valueHolder72490');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer94d8e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer94d8e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer94d8e && ($this->initializer94d8e->__invoke($valueHolder72490, $this, 'initializeProxy', array(), $this->initializer94d8e) || 1) && $this->valueHolder72490 = $valueHolder72490;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder72490;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder72490;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
