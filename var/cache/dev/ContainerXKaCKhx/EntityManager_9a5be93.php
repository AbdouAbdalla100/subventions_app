<?php

namespace ContainerXKaCKhx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercd936 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbb599 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82563 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getConnection', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getMetadataFactory', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getExpressionBuilder', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'beginTransaction', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getCache', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'transactional', array('func' => $func), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->transactional($func);
    }

    public function commit()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'commit', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->commit();
    }

    public function rollback()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'rollback', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getClassMetadata', array('className' => $className), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'createQuery', array('dql' => $dql), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'createNamedQuery', array('name' => $name), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'createQueryBuilder', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'flush', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'clear', array('entityName' => $entityName), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->clear($entityName);
    }

    public function close()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'close', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->close();
    }

    public function persist($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'persist', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'remove', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'refresh', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'detach', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'merge', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'contains', array('entity' => $entity), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getEventManager', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getConfiguration', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'isOpen', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getUnitOfWork', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getProxyFactory', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'initializeObject', array('obj' => $obj), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'getFilters', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'isFiltersStateClean', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'hasFilters', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return $this->valueHoldercd936->hasFilters();
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

        $instance->initializerbb599 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercd936) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercd936 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercd936->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__get', ['name' => $name], $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        if (isset(self::$publicProperties82563[$name])) {
            return $this->valueHoldercd936->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd936;

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

        $targetObject = $this->valueHoldercd936;
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
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd936;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercd936;
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
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__isset', array('name' => $name), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd936;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercd936;
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
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__unset', array('name' => $name), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd936;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercd936;
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
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__clone', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        $this->valueHoldercd936 = clone $this->valueHoldercd936;
    }

    public function __sleep()
    {
        $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, '__sleep', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;

        return array('valueHoldercd936');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbb599 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbb599;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbb599 && ($this->initializerbb599->__invoke($valueHoldercd936, $this, 'initializeProxy', array(), $this->initializerbb599) || 1) && $this->valueHoldercd936 = $valueHoldercd936;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd936;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd936;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
