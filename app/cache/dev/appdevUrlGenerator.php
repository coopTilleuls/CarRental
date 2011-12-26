<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_info' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'sonata_admin_set_object_field_value' => true,
       'sonata_user_admin_security_login' => true,
       'sonata_user_admin_security_check' => true,
       'sonata_user_admin_security_logout' => true,
       'admin_bundle_carrental_renting_list' => true,
       'admin_bundle_carrental_renting_create' => true,
       'admin_bundle_carrental_renting_batch' => true,
       'admin_bundle_carrental_renting_edit' => true,
       'admin_bundle_carrental_renting_delete' => true,
       'admin_bundle_carrental_renting_show' => true,
       'admin_bundle_carrental_payment_list' => true,
       'admin_bundle_carrental_payment_create' => true,
       'admin_bundle_carrental_payment_batch' => true,
       'admin_bundle_carrental_payment_edit' => true,
       'admin_bundle_carrental_payment_delete' => true,
       'admin_bundle_carrental_payment_show' => true,
       'admin_bundle_carrental_customer_list' => true,
       'admin_bundle_carrental_customer_create' => true,
       'admin_bundle_carrental_customer_batch' => true,
       'admin_bundle_carrental_customer_edit' => true,
       'admin_bundle_carrental_customer_delete' => true,
       'admin_bundle_carrental_customer_show' => true,
       'admin_bundle_carrental_vehicle_list' => true,
       'admin_bundle_carrental_vehicle_create' => true,
       'admin_bundle_carrental_vehicle_batch' => true,
       'admin_bundle_carrental_vehicle_edit' => true,
       'admin_bundle_carrental_vehicle_delete' => true,
       'admin_bundle_carrental_vehicle_show' => true,
       'admin_bundle_carrental_manufacturer_list' => true,
       'admin_bundle_carrental_manufacturer_create' => true,
       'admin_bundle_carrental_manufacturer_batch' => true,
       'admin_bundle_carrental_manufacturer_edit' => true,
       'admin_bundle_carrental_manufacturer_delete' => true,
       'admin_bundle_carrental_manufacturer_show' => true,
       'admin_bundle_carrental_model_list' => true,
       'admin_bundle_carrental_model_create' => true,
       'admin_bundle_carrental_model_batch' => true,
       'admin_bundle_carrental_model_edit' => true,
       'admin_bundle_carrental_model_delete' => true,
       'admin_bundle_carrental_model_show' => true,
       'admin_bundle_carrental_fuel_list' => true,
       'admin_bundle_carrental_fuel_create' => true,
       'admin_bundle_carrental_fuel_batch' => true,
       'admin_bundle_carrental_fuel_edit' => true,
       'admin_bundle_carrental_fuel_delete' => true,
       'admin_bundle_carrental_fuel_show' => true,
       'admin_sonata_user_user_list' => true,
       'admin_sonata_user_user_create' => true,
       'admin_sonata_user_user_batch' => true,
       'admin_sonata_user_user_edit' => true,
       'admin_sonata_user_user_delete' => true,
       'admin_sonata_user_user_show' => true,
       'admin_sonata_user_group_list' => true,
       'admin_sonata_user_group_create' => true,
       'admin_sonata_user_group_batch' => true,
       'admin_sonata_user_group_edit' => true,
       'admin_sonata_user_group_delete' => true,
       'admin_sonata_user_group_show' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_infoRouteInfo()
    {
        return array(array (  0 => 'about',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'about',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler/info',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getsonata_admin_set_object_field_valueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/set-object-field-value',  ),));
    }

    private function getsonata_user_admin_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/login',  ),));
    }

    private function getsonata_user_admin_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/login_check',  ),));
    }

    private function getsonata_user_admin_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/logout',  ),));
    }

    private function getadmin_bundle_carrental_renting_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting/list',  ),));
    }

    private function getadmin_bundle_carrental_renting_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting/create',  ),));
    }

    private function getadmin_bundle_carrental_renting_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting/batch',  ),));
    }

    private function getadmin_bundle_carrental_renting_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_renting_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_renting_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_payment_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment/list',  ),));
    }

    private function getadmin_bundle_carrental_payment_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment/create',  ),));
    }

    private function getadmin_bundle_carrental_payment_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment/batch',  ),));
    }

    private function getadmin_bundle_carrental_payment_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_payment_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_payment_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_customer_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer/list',  ),));
    }

    private function getadmin_bundle_carrental_customer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer/create',  ),));
    }

    private function getadmin_bundle_carrental_customer_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer/batch',  ),));
    }

    private function getadmin_bundle_carrental_customer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_customer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_customer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle/list',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle/create',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle/batch',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer/list',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer/create',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer/batch',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_model_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/model/list',  ),));
    }

    private function getadmin_bundle_carrental_model_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/model/create',  ),));
    }

    private function getadmin_bundle_carrental_model_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/model/batch',  ),));
    }

    private function getadmin_bundle_carrental_model_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_model_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_model_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_fuel_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel/list',  ),));
    }

    private function getadmin_bundle_carrental_fuel_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel/create',  ),));
    }

    private function getadmin_bundle_carrental_fuel_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel/batch',  ),));
    }

    private function getadmin_bundle_carrental_fuel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel',  ),));
    }

    private function getadmin_bundle_carrental_fuel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel',  ),));
    }

    private function getadmin_bundle_carrental_fuel_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bundle/carrental/fuel',  ),));
    }

    private function getadmin_sonata_user_user_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/user/list',  ),));
    }

    private function getadmin_sonata_user_user_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/user/create',  ),));
    }

    private function getadmin_sonata_user_user_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/user/batch',  ),));
    }

    private function getadmin_sonata_user_user_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/user',  ),));
    }

    private function getadmin_sonata_user_user_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/user',  ),));
    }

    private function getadmin_sonata_user_user_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/user',  ),));
    }

    private function getadmin_sonata_user_group_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/group/list',  ),));
    }

    private function getadmin_sonata_user_group_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/group/create',  ),));
    }

    private function getadmin_sonata_user_group_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/user/group/batch',  ),));
    }

    private function getadmin_sonata_user_group_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/group',  ),));
    }

    private function getadmin_sonata_user_group_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/group',  ),));
    }

    private function getadmin_sonata_user_group_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sonata/user/group',  ),));
    }
}
