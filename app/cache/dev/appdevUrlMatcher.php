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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
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

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

        }

        // admin_bundle_carrental_renting_list
        if ($pathinfo === '/bundle/carrental/renting/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_list',  '_route' => 'admin_bundle_carrental_renting_list',);
        }

        // admin_bundle_carrental_renting_create
        if ($pathinfo === '/bundle/carrental/renting/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_create',  '_route' => 'admin_bundle_carrental_renting_create',);
        }

        // admin_bundle_carrental_renting_batch
        if ($pathinfo === '/bundle/carrental/renting/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_batch',  '_route' => 'admin_bundle_carrental_renting_batch',);
        }

        // admin_bundle_carrental_renting_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_edit',)), array('_route' => 'admin_bundle_carrental_renting_edit'));
        }

        // admin_bundle_carrental_renting_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_delete',)), array('_route' => 'admin_bundle_carrental_renting_delete'));
        }

        // admin_bundle_carrental_renting_show
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_show',)), array('_route' => 'admin_bundle_carrental_renting_show'));
        }

        // admin_bundle_carrental_payment_list
        if ($pathinfo === '/bundle/carrental/payment/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_list',  '_route' => 'admin_bundle_carrental_payment_list',);
        }

        // admin_bundle_carrental_payment_create
        if ($pathinfo === '/bundle/carrental/payment/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_create',  '_route' => 'admin_bundle_carrental_payment_create',);
        }

        // admin_bundle_carrental_payment_batch
        if ($pathinfo === '/bundle/carrental/payment/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_batch',  '_route' => 'admin_bundle_carrental_payment_batch',);
        }

        // admin_bundle_carrental_payment_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_edit',)), array('_route' => 'admin_bundle_carrental_payment_edit'));
        }

        // admin_bundle_carrental_payment_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_delete',)), array('_route' => 'admin_bundle_carrental_payment_delete'));
        }

        // admin_bundle_carrental_payment_show
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_show',)), array('_route' => 'admin_bundle_carrental_payment_show'));
        }

        // admin_bundle_carrental_customer_list
        if ($pathinfo === '/bundle/carrental/customer/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_list',  '_route' => 'admin_bundle_carrental_customer_list',);
        }

        // admin_bundle_carrental_customer_create
        if ($pathinfo === '/bundle/carrental/customer/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_create',  '_route' => 'admin_bundle_carrental_customer_create',);
        }

        // admin_bundle_carrental_customer_batch
        if ($pathinfo === '/bundle/carrental/customer/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_batch',  '_route' => 'admin_bundle_carrental_customer_batch',);
        }

        // admin_bundle_carrental_customer_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_edit',)), array('_route' => 'admin_bundle_carrental_customer_edit'));
        }

        // admin_bundle_carrental_customer_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_delete',)), array('_route' => 'admin_bundle_carrental_customer_delete'));
        }

        // admin_bundle_carrental_customer_show
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_show',)), array('_route' => 'admin_bundle_carrental_customer_show'));
        }

        // admin_bundle_carrental_vehicle_list
        if ($pathinfo === '/bundle/carrental/vehicle/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_list',  '_route' => 'admin_bundle_carrental_vehicle_list',);
        }

        // admin_bundle_carrental_vehicle_create
        if ($pathinfo === '/bundle/carrental/vehicle/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_create',  '_route' => 'admin_bundle_carrental_vehicle_create',);
        }

        // admin_bundle_carrental_vehicle_batch
        if ($pathinfo === '/bundle/carrental/vehicle/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_batch',  '_route' => 'admin_bundle_carrental_vehicle_batch',);
        }

        // admin_bundle_carrental_vehicle_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_edit',)), array('_route' => 'admin_bundle_carrental_vehicle_edit'));
        }

        // admin_bundle_carrental_vehicle_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_delete',)), array('_route' => 'admin_bundle_carrental_vehicle_delete'));
        }

        // admin_bundle_carrental_vehicle_show
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_show',)), array('_route' => 'admin_bundle_carrental_vehicle_show'));
        }

        // admin_bundle_carrental_manufacturer_list
        if ($pathinfo === '/bundle/carrental/manufacturer/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_list',  '_route' => 'admin_bundle_carrental_manufacturer_list',);
        }

        // admin_bundle_carrental_manufacturer_create
        if ($pathinfo === '/bundle/carrental/manufacturer/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_create',  '_route' => 'admin_bundle_carrental_manufacturer_create',);
        }

        // admin_bundle_carrental_manufacturer_batch
        if ($pathinfo === '/bundle/carrental/manufacturer/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_batch',  '_route' => 'admin_bundle_carrental_manufacturer_batch',);
        }

        // admin_bundle_carrental_manufacturer_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_edit',)), array('_route' => 'admin_bundle_carrental_manufacturer_edit'));
        }

        // admin_bundle_carrental_manufacturer_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_delete',)), array('_route' => 'admin_bundle_carrental_manufacturer_delete'));
        }

        // admin_bundle_carrental_manufacturer_show
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_show',)), array('_route' => 'admin_bundle_carrental_manufacturer_show'));
        }

        // admin_bundle_carrental_model_list
        if ($pathinfo === '/bundle/carrental/model/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_list',  '_route' => 'admin_bundle_carrental_model_list',);
        }

        // admin_bundle_carrental_model_create
        if ($pathinfo === '/bundle/carrental/model/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_create',  '_route' => 'admin_bundle_carrental_model_create',);
        }

        // admin_bundle_carrental_model_batch
        if ($pathinfo === '/bundle/carrental/model/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_batch',  '_route' => 'admin_bundle_carrental_model_batch',);
        }

        // admin_bundle_carrental_model_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_edit',)), array('_route' => 'admin_bundle_carrental_model_edit'));
        }

        // admin_bundle_carrental_model_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_delete',)), array('_route' => 'admin_bundle_carrental_model_delete'));
        }

        // admin_bundle_carrental_model_show
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_show',)), array('_route' => 'admin_bundle_carrental_model_show'));
        }

        // admin_bundle_carrental_fuel_list
        if ($pathinfo === '/bundle/carrental/fuel/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_list',  '_route' => 'admin_bundle_carrental_fuel_list',);
        }

        // admin_bundle_carrental_fuel_create
        if ($pathinfo === '/bundle/carrental/fuel/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_create',  '_route' => 'admin_bundle_carrental_fuel_create',);
        }

        // admin_bundle_carrental_fuel_batch
        if ($pathinfo === '/bundle/carrental/fuel/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_batch',  '_route' => 'admin_bundle_carrental_fuel_batch',);
        }

        // admin_bundle_carrental_fuel_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_edit',)), array('_route' => 'admin_bundle_carrental_fuel_edit'));
        }

        // admin_bundle_carrental_fuel_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_delete',)), array('_route' => 'admin_bundle_carrental_fuel_delete'));
        }

        // admin_bundle_carrental_fuel_show
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_show',)), array('_route' => 'admin_bundle_carrental_fuel_show'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
