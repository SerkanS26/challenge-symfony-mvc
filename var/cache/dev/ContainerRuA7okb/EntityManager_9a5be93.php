<?php

namespace ContainerRuA7okb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder591e4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerec88e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties703a5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getConnection', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getMetadataFactory', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getExpressionBuilder', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'beginTransaction', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getCache', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'transactional', array('func' => $func), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->transactional($func);
    }

    public function commit()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'commit', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->commit();
    }

    public function rollback()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'rollback', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getClassMetadata', array('className' => $className), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'createQuery', array('dql' => $dql), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'createNamedQuery', array('name' => $name), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'createQueryBuilder', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'flush', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'clear', array('entityName' => $entityName), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->clear($entityName);
    }

    public function close()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'close', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->close();
    }

    public function persist($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'persist', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'remove', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'refresh', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'detach', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'merge', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'contains', array('entity' => $entity), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getEventManager', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getConfiguration', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'isOpen', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getUnitOfWork', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getProxyFactory', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'initializeObject', array('obj' => $obj), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'getFilters', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'isFiltersStateClean', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'hasFilters', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return $this->valueHolder591e4->hasFilters();
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

        $instance->initializerec88e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder591e4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder591e4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder591e4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__get', ['name' => $name], $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        if (isset(self::$publicProperties703a5[$name])) {
            return $this->valueHolder591e4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder591e4;

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

        $targetObject = $this->valueHolder591e4;
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
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder591e4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder591e4;
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
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__isset', array('name' => $name), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder591e4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder591e4;
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
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__unset', array('name' => $name), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder591e4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder591e4;
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
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__clone', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        $this->valueHolder591e4 = clone $this->valueHolder591e4;
    }

    public function __sleep()
    {
        $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, '__sleep', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;

        return array('valueHolder591e4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec88e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec88e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerec88e && ($this->initializerec88e->__invoke($valueHolder591e4, $this, 'initializeProxy', array(), $this->initializerec88e) || 1) && $this->valueHolder591e4 = $valueHolder591e4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder591e4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder591e4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
