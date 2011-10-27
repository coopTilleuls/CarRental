<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/FrameworkBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SecurityBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/TwigBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/MonologBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SwiftmailerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/DoctrineBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/AsseticBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Symfony/Bundle/AsseticBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SensioFrameworkExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/JMSSecurityExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/JMS/SecurityExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/StofDoctrineExtensionsBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Stof/DoctrineExtensionsBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonatajQueryBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SonatajQueryBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonatajQueryBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Sonata/jQueryBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBluePrintBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SonataBluePrintBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBluePrintBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Sonata/BluePrintBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/SonataAdminBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Sonata/AdminBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/KnpMenuBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/Users/dunglas/Documents/workspace/CarRental/vendor/bundles/Knp/Bundle/MenuBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DunglasCarRentalBundle', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/DunglasCarRentalBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DunglasCarRentalBundle', '/Users/dunglas/Documents/workspace/CarRental/src/Dunglas/Bundle/CarRentalBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/Users/dunglas/Documents/workspace/CarRental/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.name_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/Users/dunglas/Documents/workspace/CarRental/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetWriterCacheWarmer($this, new \Assetic\AssetWriter('/Users/dunglas/Documents/workspace/CarRental/app/../web'))));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Symfony\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Symfony\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Gedmo\Timestampable\TimestampableListener();
        $a->setAnnotationReader($this->get('annotation_reader'));
        $b = new \Doctrine\Common\EventManager();
        $b->addEventSubscriber(new \Doctrine\DBAL\Event\Listeners\MysqlSessionInit('UTF8'));
        $b->addEventSubscriber($a);
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'carrental', 'host' => 'localhost', 'user' => 'root', 'password' => '', 'driver' => 'pdo_mysql', 'unix_socket' => '/tmp/mysql.sock', 'port' => NULL, 'logging' => false, 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $b, array());
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_845a49ca8595afbc4ab5b82992b5e90b');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_845a49ca8595afbc4ab5b82992b5e90b');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_845a49ca8595afbc4ab5b82992b5e90b');
        $d = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $d->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(new \Symfony\Bridge\Doctrine\Annotations\IndexedReader($this->get('annotation_reader')), array(0 => '/Users/dunglas/Documents/workspace/CarRental/src/Dunglas/Bundle/CarRentalBundle/Entity')), 'Dunglas\\Bundle\\CarRentalBundle\\Entity');
        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('DunglasCarRentalBundle' => 'Dunglas\\Bundle\\CarRentalBundle\\Entity'));
        $e->setMetadataCacheImpl($a);
        $e->setQueryCacheImpl($b);
        $e->setResultCacheImpl($c);
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir('/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/doctrine/orm/Proxies');
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(false);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        return $this->services['doctrine.orm.default_entity_manager'] = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $e);
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\EntityInitializer($this->get('doctrine'));
    }
    protected function getDunglas_Carrental_Admin_FuelService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\FuelAdmin('dunglas.carrental.admin.fuel', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Fuel', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Fuel');
        $instance->configure();
        return $instance;
    }
    protected function getDunglas_Carrental_Admin_ManufacturerService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\ManufacturerAdmin('dunglas.carrental.admin.manufacturer', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Manufacturer', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Manufacturer');
        $instance->configure();
        return $instance;
    }
    protected function getDunglas_Carrental_Admin_ModelService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\ModelAdmin('dunglas.carrental.admin.model', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Model', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Model');
        $instance->configure();
        return $instance;
    }
    protected function getDunglas_Carrental_Admin_PaymenyService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\PaymentAdmin('dunglas.carrental.admin.paymeny', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Payment', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Renting');
        $instance->configure();
        return $instance;
    }
    protected function getDunglas_Carrental_Admin_RentingService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\RentingAdmin('dunglas.carrental.admin.renting', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Renting', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Renting');
        $instance->configure();
        return $instance;
    }
    protected function getDunglas_Carrental_Admin_VehicleService()
    {
        $instance = new \Dunglas\Bundle\CarRentalBundle\Admin\VehicleAdmin('dunglas.carrental.admin.vehicle', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Vehicle', 'SonataAdminBundle:CRUD');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouter($this->get('router'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler.noop'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setLabel('Vehicle');
        $instance->configure();
        return $instance;
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('kernel.request', array(0 => 'session_listener', 1 => 'onKernelRequest'), 128);
        $instance->addListenerService('kernel.request', array(0 => 'security.firewall', 1 => 'onKernelRequest'), 64);
        $instance->addListenerService('kernel.response', array(0 => 'security.rememberme.response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.controller.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.converter.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelView'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sensio_framework_extra.cache.listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'security.extra.controller_listener', 1 => 'onCoreController'), -255);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/Users/dunglas/Documents/workspace/CarRental/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\HttpKernel\Util\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), '5c27fa07b6550433693faf2c9b0e215edea9d26f');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'csrf' => 'form.type.csrf', 'entity' => 'form.type.entity', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_collection' => 'sonata.admin.form.type.collection', 'sonata_type_model' => 'sonata.admin.form.type.model', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_immutable_array' => 'sonata.admin.form.type.array', 'sonata_type_boolean' => 'sonata.admin.form.type.boolean', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default'), array('field' => array(0 => 'form.type_extension.field', 1 => 'sonata.admin.form.extension.field'), 'form' => array(0 => 'form.type_extension.csrf')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))));
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CsrfService()
    {
        return $this->services['form.type.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\CsrfType($this->get('form.csrf_provider'));
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType($this->get('validator'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(true, '_token');
    }
    protected function getForm_TypeExtension_FieldService()
    {
        return $this->services['form.type_extension.field'] = new \Symfony\Component\Form\Extension\Validator\Type\FieldTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request')));
    }
    protected function getKernelService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer('UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig');
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMailerService()
    {
        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('/Users/dunglas/Documents/workspace/CarRental/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new \RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/Users/dunglas/Documents/workspace/CarRental/app/config/routing.yml', array('cache_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appprodUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appprodUrlMatcher'), NULL);
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('monolog.logger.request'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('sonata.admin.route_loader'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $d);
    }
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('logger'));
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }
    protected function getSecurity_Extra_ControllerListenerService()
    {
        return $this->services['security.extra.controller_listener'] = new \JMS\SecurityExtraBundle\Controller\ControllerListener($this, $this->get('annotation_reader'));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/login$'), 'security.firewall.map.context.secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_SecuredAreaService()
    {
        $a = $this->get('monolog.logger.security');
        $b = $this->get('security.context');
        $c = $this->get('event_dispatcher');
        $d = $this->get('router');
        $e = $this->get('security.authentication.manager');
        $f = new \Symfony\Component\Security\Http\AccessMap();
        $g = new \Symfony\Component\Security\Http\HttpUtils($d);
        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $g, '/demo/secured/logout', '/demo/', NULL);
        $h->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        return $this->services['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($f, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.in_memory')), 'secured_area', $a, $c), 2 => $h, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $e, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $g, 'secured_area', array('check_path' => '/demo/secured/login_check', 'login_path' => '/demo/secured/login', 'use_forward' => false, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), NULL, NULL, $a, $c), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $f, $e, $a)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $g, new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $g, '/demo/secured/login', false), NULL, NULL, $a));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\ResponseListener();
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Bundle\SecurityBundle\Validator\Constraint\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine'));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager(array());
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0);
        return $instance;
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage'));
    }
    protected function getSession_StorageService()
    {
        return $this->services['session.storage'] = new \Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage(array());
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this, true);
    }
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number'));
    }
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\AdminBundle\Builder\ORM\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'));
    }
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\AdminBundle\Builder\ORM\FormContractor($this->get('form.factory'));
    }
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\AdminBundle\Builder\ORM\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'));
    }
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\AdminBundle\Builder\ORM\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'));
    }
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension();
    }
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }
    protected function getSonata_Admin_Form_Type_ArrayService()
    {
        return $this->services['sonata.admin.form.type.array'] = new \Sonata\AdminBundle\Form\Type\ImmutableArrayType();
    }
    protected function getSonata_Admin_Form_Type_BooleanService()
    {
        return $this->services['sonata.admin.form.type.boolean'] = new \Sonata\AdminBundle\Form\Type\BooleanType($this->get('translator'));
    }
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }
    protected function getSonata_Admin_Form_Type_ModelService()
    {
        return $this->services['sonata.admin.form.type.model'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\AdminBundle\Guesser\ORM\FilterTypeGuesser($this->get('doctrine'));
    }
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\AdminBundle\Guesser\ORM\TypeGuesser($this->get('doctrine'));
    }
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\AdminBundle\Guesser\ORM\TypeGuesser($this->get('doctrine'));
    }
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\AdminBundle\Model\ORM\ModelManager($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\BooleanFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\CallbackFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\ChoiceFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\ModelFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\NumberFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\AdminBundle\Filter\ORM\StringFilter();
    }
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this);
        $instance->setAdminServiceIds(array(0 => 'dunglas.carrental.admin.renting', 1 => 'dunglas.carrental.admin.paymeny', 2 => 'dunglas.carrental.admin.vehicle', 3 => 'dunglas.carrental.admin.manufacturer', 4 => 'dunglas.carrental.admin.model', 5 => 'dunglas.carrental.admin.fuel'));
        $instance->setAdminGroups(array('Car Rental' => array('label' => 'Car Rental', 'items' => array(0 => 'dunglas.carrental.admin.renting', 1 => 'dunglas.carrental.admin.paymeny')), 'Vehicle' => array('label' => 'Vehicle', 'items' => array(0 => 'dunglas.carrental.admin.vehicle')), 'Config' => array('label' => 'Config', 'items' => array(0 => 'dunglas.carrental.admin.manufacturer', 1 => 'dunglas.carrental.admin.model', 2 => 'dunglas.carrental.admin.fuel'))));
        $instance->setAdminClasses(array('Dunglas\\Bundle\\CarRentalBundle\\Entity\\Renting' => 'dunglas.carrental.admin.renting', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Payment' => 'dunglas.carrental.admin.paymeny', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Vehicle' => 'dunglas.carrental.admin.vehicle', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Manufacturer' => 'dunglas.carrental.admin.manufacturer', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Model' => 'dunglas.carrental.admin.model', 'Dunglas\\Bundle\\CarRentalBundle\\Entity\\Fuel' => 'dunglas.carrental.admin.fuel'));
        return $instance;
    }
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'dunglas.carrental.admin.renting', 1 => 'dunglas.carrental.admin.paymeny', 2 => 'dunglas.carrental.admin.vehicle', 3 => 'dunglas.carrental.admin.manufacturer', 4 => 'dunglas.carrental.admin.model', 5 => 'dunglas.carrental.admin.fuel'), $this);
    }
    protected function getSonata_Admin_Security_Handler_AclService()
    {
        return $this->services['sonata.admin.security.handler.acl'] = new \Sonata\AdminBundle\Security\Handler\AclSecurityHandler($this->get('security.context'));
    }
    protected function getSonata_Admin_Security_Handler_NoopService()
    {
        return $this->services['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension();
    }
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }
    protected function getStofDoctrineExtensions_Listener_LoggableService()
    {
        $this->services['stof_doctrine_extensions.listener.loggable'] = $instance = new \Stof\DoctrineExtensionsBundle\Listener\LoggableListener();
        $instance->setContainer($this);
        $instance->setAnnotationReader($this->get('annotation_reader'));
        return $instance;
    }
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Stof\DoctrineExtensionsBundle\Listener\TranslationListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('en');
        $instance->setTranslationFallback(false);
        return $instance;
    }
    protected function getSwiftmailer_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.plugin.messagelogger'] = new \Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger();
    }
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());
        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername('');
        $instance->setPassword('');
        $instance->setAuthMode(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.globals'));
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/Users/dunglas/Documents/workspace/CarRental/app');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($a, array(0 => 'FrameworkBundle:Form'));
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranlsation_Dumper_XliffService()
    {
        return $this->services['tranlsation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xliff', $this->get('translation.loader.xliff'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('rb', $this->get('translation.loader.rb'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtTranslationsLoader();
    }
    protected function getTranslation_Loader_RbService()
    {
        return $this->services['translation.loader.rb'] = new \Symfony\Component\Translation\Loader\ResourceBundleLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xliff', $this->get('tranlsation.dumper.xliff'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        return $instance;
    }
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }
    protected function getTranslator_DefaultService()
    {
        return $this->services['translator.default'] = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => 'php', 'translation.loader.yml' => 'yml', 'translation.loader.xliff' => 'xliff', 'translation.loader.qt' => 'ts', 'translation.loader.csv' => 'csv', 'translation.loader.rb' => 'rb', 'translation.loader.ini' => 'ini'), array('cache_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/translations', 'debug' => false, 'charset' => 'UTF-8'));
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/twig', 'charset' => 'UTF-8'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => 'form_div_layout.html.twig')));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), false, array()));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        return $instance;
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/../../../Bridge/Twig/Resources/views/Form');
        $instance->addPath('/Users/dunglas/Documents/workspace/CarRental/vendor/knp/menu/src/Knp/Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), $this->get('validator.validator_factory'), array(0 => $this->get('doctrine.orm.validator_initializer')));
    }
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->get('sonata.admin.security.handler.noop');
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, new \Symfony\Component\DependencyInjection\ParameterBag\ParameterBag($this->getDefaultParameters()), '/Users/dunglas/Documents/workspace/CarRental/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')))), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        return $this->services['security.authentication.manager'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.in_memory'), new \Symfony\Component\Security\Core\User\UserChecker(), 'secured_area', $this->get('security.encoder_factory'), true)));
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('user', 'userpass', array(0 => 'ROLE_USER')));
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'adminpass', array(0 => 'ROLE_ADMIN')));
        return $instance;
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod');
    }
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline'));
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!array_key_exists($name, $this->parameters)) {
            throw new \InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new \LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/Users/dunglas/Documents/workspace/CarRental/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod',
            'kernel.logs_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SonatajQueryBundle' => 'Sonata\\jQueryBundle\\SonatajQueryBundle',
                'SonataBluePrintBundle' => 'Sonata\\BluePrintBundle\\SonataBluePrintBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'DunglasCarRentalBundle' => 'Dunglas\\Bundle\\CarRentalBundle\\DunglasCarRentalBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => 'localhost',
            'database_name' => 'carrental',
            'database_user' => 'root',
            'database_unix_socket' => '/tmp/mysql.sock',
            'database_password' => '',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'localhost',
            'mailer_user' => '',
            'mailer_password' => '',
            'locale' => 'fr',
            'secret' => '5c27fa07b6550433693faf2c9b0e215edea9d26f',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\HttpKernel\\Util\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtTranslationsLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.rb.class' => 'Symfony\\Component\\Translation\\Loader\\ResourceBundleLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => '5c27fa07b6550433693faf2c9b0e215edea9d26f',
            'kernel.trust_proxy_headers' => false,
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.filesystem.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\FilesystemSessionStorage',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/Users/dunglas/Documents/workspace/CarRental/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'app%kernel.environment%UrlMatcher',
            'router.options.generator.cache_class' => 'app%kernel.environment%UrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.resource' => '/Users/dunglas/Documents/workspace/CarRental/app/config/routing.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.entity.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Bundle\\SecurityBundle\\Validator\\Constraint\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\ResponseListener',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/twig',
                'charset' => 'UTF-8',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\Logger\\MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.plugin.antiflood.threshold' => 99,
            'swiftmailer.plugin.antiflood.sleep' => 0,
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.smtp.encryption' => NULL,
            'swiftmailer.transport.smtp.port' => 25,
            'swiftmailer.transport.smtp.host' => 'localhost',
            'swiftmailer.transport.smtp.username' => '',
            'swiftmailer.transport.smtp.password' => '',
            'swiftmailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.sender_address' => NULL,
            'swiftmailer.single_address' => NULL,
            'doctrine.dbal.logger.debug.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Doctrine\\Common\\EventManager',
            'doctrine.dbal.connection_factory.class' => 'Symfony\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Symfony\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.dbal.connection_factory.types' => array(
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.annotation_reader.class' => 'Symfony\\Bridge\\Doctrine\\Annotations\\IndexedReader',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\EntityInitializer',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => '/Users/dunglas/Documents/workspace/CarRental/app/cache/prod/assetic',
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/Users/dunglas/Documents/workspace/CarRental/app/../web',
            'assetic.write_to' => '/Users/dunglas/Documents/workspace/CarRental/app/../web',
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'assetic.asset_writer_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetWriterCacheWarmer',
            'assetic.asset_writer.class' => 'Assetic\\AssetWriter',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'security.secured_services' => array(
            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.extra.controller_listener.class' => 'JMS\\SecurityExtraBundle\\Controller\\ControllerListener',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.secure_all_services' => false,
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Stof\\DoctrineExtensionsBundle\\Listener\\TranslationListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Stof\\DoctrineExtensionsBundle\\Listener\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'sonata.admin.templates.layout' => 'SonataAdminBundle::standard_layout.html.twig',
            'sonata.admin.templates.ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
        );
    }
}
