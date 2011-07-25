<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',  '_route' => 'homepage',);
        }

        // vehicle
        if (rtrim($pathinfo, '/') === '/vehicle') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vehicle');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::indexAction',  '_route' => 'vehicle',);
        }

        // vehicle_show
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::showAction',)), array('_route' => 'vehicle_show'));
        }

        // vehicle_new
        if ($pathinfo === '/vehicle/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::newAction',  '_route' => 'vehicle_new',);
        }

        // vehicle_create
        if ($pathinfo === '/vehicle/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::createAction',  '_route' => 'vehicle_create',);
        }
        not_vehicle_create:

        // vehicle_edit
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::editAction',)), array('_route' => 'vehicle_edit'));
        }

        // vehicle_update
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::updateAction',)), array('_route' => 'vehicle_update'));
        }
        not_vehicle_update:

        // vehicle_delete
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::deleteAction',)), array('_route' => 'vehicle_delete'));
        }
        not_vehicle_delete:

        // customer
        if (rtrim($pathinfo, '/') === '/customer') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'customer');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
        }

        // customer_show
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::showAction',)), array('_route' => 'customer_show'));
        }

        // customer_new
        if ($pathinfo === '/customer/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
        }

        // customer_create
        if ($pathinfo === '/customer/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
        }
        not_customer_create:

        // customer_edit
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::editAction',)), array('_route' => 'customer_edit'));
        }

        // customer_update
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::updateAction',)), array('_route' => 'customer_update'));
        }
        not_customer_update:

        // customer_delete
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::deleteAction',)), array('_route' => 'customer_delete'));
        }
        not_customer_delete:

        // manufacturer
        if (rtrim($pathinfo, '/') === '/manufacturer') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'manufacturer');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::indexAction',  '_route' => 'manufacturer',);
        }

        // manufacturer_show
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::showAction',)), array('_route' => 'manufacturer_show'));
        }

        // manufacturer_new
        if ($pathinfo === '/manufacturer/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::newAction',  '_route' => 'manufacturer_new',);
        }

        // manufacturer_create
        if ($pathinfo === '/manufacturer/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::createAction',  '_route' => 'manufacturer_create',);
        }
        not_manufacturer_create:

        // manufacturer_edit
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::editAction',)), array('_route' => 'manufacturer_edit'));
        }

        // manufacturer_update
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::updateAction',)), array('_route' => 'manufacturer_update'));
        }
        not_manufacturer_update:

        // manufacturer_delete
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::deleteAction',)), array('_route' => 'manufacturer_delete'));
        }
        not_manufacturer_delete:

        // model
        if (rtrim($pathinfo, '/') === '/model') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'model');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::indexAction',  '_route' => 'model',);
        }

        // model_show
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::showAction',)), array('_route' => 'model_show'));
        }

        // model_new
        if ($pathinfo === '/model/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::newAction',  '_route' => 'model_new',);
        }

        // model_create
        if ($pathinfo === '/model/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::createAction',  '_route' => 'model_create',);
        }
        not_model_create:

        // model_edit
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::editAction',)), array('_route' => 'model_edit'));
        }

        // model_update
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::updateAction',)), array('_route' => 'model_update'));
        }
        not_model_update:

        // model_delete
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::deleteAction',)), array('_route' => 'model_delete'));
        }
        not_model_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
