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

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_user_admin_security_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
            }

            // sonata_user_admin_security_check
            if ($pathinfo === '/admin/login_check') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        // admin_bundle_carrental_renting_list
        if ($pathinfo === '/bundle/carrental/renting/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_list',  '_route' => 'admin_bundle_carrental_renting_list',);
        }

        // admin_bundle_carrental_renting_create
        if ($pathinfo === '/bundle/carrental/renting/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_create',  '_route' => 'admin_bundle_carrental_renting_create',);
        }

        // admin_bundle_carrental_renting_batch
        if ($pathinfo === '/bundle/carrental/renting/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_batch',  '_route' => 'admin_bundle_carrental_renting_batch',);
        }

        // admin_bundle_carrental_renting_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_edit',)), array('_route' => 'admin_bundle_carrental_renting_edit'));
        }

        // admin_bundle_carrental_renting_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_delete',)), array('_route' => 'admin_bundle_carrental_renting_delete'));
        }

        // admin_bundle_carrental_renting_show
        if (0 === strpos($pathinfo, '/bundle/carrental/renting') && preg_match('#^/bundle/carrental/renting/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_show',)), array('_route' => 'admin_bundle_carrental_renting_show'));
        }

        // admin_bundle_carrental_payment_list
        if ($pathinfo === '/bundle/carrental/payment/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_list',  '_route' => 'admin_bundle_carrental_payment_list',);
        }

        // admin_bundle_carrental_payment_create
        if ($pathinfo === '/bundle/carrental/payment/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_create',  '_route' => 'admin_bundle_carrental_payment_create',);
        }

        // admin_bundle_carrental_payment_batch
        if ($pathinfo === '/bundle/carrental/payment/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_batch',  '_route' => 'admin_bundle_carrental_payment_batch',);
        }

        // admin_bundle_carrental_payment_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_edit',)), array('_route' => 'admin_bundle_carrental_payment_edit'));
        }

        // admin_bundle_carrental_payment_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_delete',)), array('_route' => 'admin_bundle_carrental_payment_delete'));
        }

        // admin_bundle_carrental_payment_show
        if (0 === strpos($pathinfo, '/bundle/carrental/payment') && preg_match('#^/bundle/carrental/payment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_show',)), array('_route' => 'admin_bundle_carrental_payment_show'));
        }

        // admin_bundle_carrental_customer_list
        if ($pathinfo === '/bundle/carrental/customer/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_list',  '_route' => 'admin_bundle_carrental_customer_list',);
        }

        // admin_bundle_carrental_customer_create
        if ($pathinfo === '/bundle/carrental/customer/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_create',  '_route' => 'admin_bundle_carrental_customer_create',);
        }

        // admin_bundle_carrental_customer_batch
        if ($pathinfo === '/bundle/carrental/customer/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_batch',  '_route' => 'admin_bundle_carrental_customer_batch',);
        }

        // admin_bundle_carrental_customer_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_edit',)), array('_route' => 'admin_bundle_carrental_customer_edit'));
        }

        // admin_bundle_carrental_customer_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_delete',)), array('_route' => 'admin_bundle_carrental_customer_delete'));
        }

        // admin_bundle_carrental_customer_show
        if (0 === strpos($pathinfo, '/bundle/carrental/customer') && preg_match('#^/bundle/carrental/customer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_show',)), array('_route' => 'admin_bundle_carrental_customer_show'));
        }

        // admin_bundle_carrental_vehicle_list
        if ($pathinfo === '/bundle/carrental/vehicle/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_list',  '_route' => 'admin_bundle_carrental_vehicle_list',);
        }

        // admin_bundle_carrental_vehicle_create
        if ($pathinfo === '/bundle/carrental/vehicle/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_create',  '_route' => 'admin_bundle_carrental_vehicle_create',);
        }

        // admin_bundle_carrental_vehicle_batch
        if ($pathinfo === '/bundle/carrental/vehicle/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_batch',  '_route' => 'admin_bundle_carrental_vehicle_batch',);
        }

        // admin_bundle_carrental_vehicle_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_edit',)), array('_route' => 'admin_bundle_carrental_vehicle_edit'));
        }

        // admin_bundle_carrental_vehicle_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_delete',)), array('_route' => 'admin_bundle_carrental_vehicle_delete'));
        }

        // admin_bundle_carrental_vehicle_show
        if (0 === strpos($pathinfo, '/bundle/carrental/vehicle') && preg_match('#^/bundle/carrental/vehicle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_show',)), array('_route' => 'admin_bundle_carrental_vehicle_show'));
        }

        // admin_bundle_carrental_manufacturer_list
        if ($pathinfo === '/bundle/carrental/manufacturer/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_list',  '_route' => 'admin_bundle_carrental_manufacturer_list',);
        }

        // admin_bundle_carrental_manufacturer_create
        if ($pathinfo === '/bundle/carrental/manufacturer/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_create',  '_route' => 'admin_bundle_carrental_manufacturer_create',);
        }

        // admin_bundle_carrental_manufacturer_batch
        if ($pathinfo === '/bundle/carrental/manufacturer/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_batch',  '_route' => 'admin_bundle_carrental_manufacturer_batch',);
        }

        // admin_bundle_carrental_manufacturer_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_edit',)), array('_route' => 'admin_bundle_carrental_manufacturer_edit'));
        }

        // admin_bundle_carrental_manufacturer_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_delete',)), array('_route' => 'admin_bundle_carrental_manufacturer_delete'));
        }

        // admin_bundle_carrental_manufacturer_show
        if (0 === strpos($pathinfo, '/bundle/carrental/manufacturer') && preg_match('#^/bundle/carrental/manufacturer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_show',)), array('_route' => 'admin_bundle_carrental_manufacturer_show'));
        }

        // admin_bundle_carrental_model_list
        if ($pathinfo === '/bundle/carrental/model/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_list',  '_route' => 'admin_bundle_carrental_model_list',);
        }

        // admin_bundle_carrental_model_create
        if ($pathinfo === '/bundle/carrental/model/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_create',  '_route' => 'admin_bundle_carrental_model_create',);
        }

        // admin_bundle_carrental_model_batch
        if ($pathinfo === '/bundle/carrental/model/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_batch',  '_route' => 'admin_bundle_carrental_model_batch',);
        }

        // admin_bundle_carrental_model_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_edit',)), array('_route' => 'admin_bundle_carrental_model_edit'));
        }

        // admin_bundle_carrental_model_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_delete',)), array('_route' => 'admin_bundle_carrental_model_delete'));
        }

        // admin_bundle_carrental_model_show
        if (0 === strpos($pathinfo, '/bundle/carrental/model') && preg_match('#^/bundle/carrental/model/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_show',)), array('_route' => 'admin_bundle_carrental_model_show'));
        }

        // admin_bundle_carrental_fuel_list
        if ($pathinfo === '/bundle/carrental/fuel/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_list',  '_route' => 'admin_bundle_carrental_fuel_list',);
        }

        // admin_bundle_carrental_fuel_create
        if ($pathinfo === '/bundle/carrental/fuel/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_create',  '_route' => 'admin_bundle_carrental_fuel_create',);
        }

        // admin_bundle_carrental_fuel_batch
        if ($pathinfo === '/bundle/carrental/fuel/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_batch',  '_route' => 'admin_bundle_carrental_fuel_batch',);
        }

        // admin_bundle_carrental_fuel_edit
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_edit',)), array('_route' => 'admin_bundle_carrental_fuel_edit'));
        }

        // admin_bundle_carrental_fuel_delete
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_delete',)), array('_route' => 'admin_bundle_carrental_fuel_delete'));
        }

        // admin_bundle_carrental_fuel_show
        if (0 === strpos($pathinfo, '/bundle/carrental/fuel') && preg_match('#^/bundle/carrental/fuel/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cooptilleuls.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_show',)), array('_route' => 'admin_bundle_carrental_fuel_show'));
        }

        // admin_sonata_user_user_list
        if ($pathinfo === '/sonata/user/user/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
        }

        // admin_sonata_user_user_create
        if ($pathinfo === '/sonata/user/user/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
        }

        // admin_sonata_user_user_batch
        if ($pathinfo === '/sonata/user/user/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
        }

        // admin_sonata_user_user_edit
        if (0 === strpos($pathinfo, '/sonata/user/user') && preg_match('#^/sonata/user/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',)), array('_route' => 'admin_sonata_user_user_edit'));
        }

        // admin_sonata_user_user_delete
        if (0 === strpos($pathinfo, '/sonata/user/user') && preg_match('#^/sonata/user/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',)), array('_route' => 'admin_sonata_user_user_delete'));
        }

        // admin_sonata_user_user_show
        if (0 === strpos($pathinfo, '/sonata/user/user') && preg_match('#^/sonata/user/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',)), array('_route' => 'admin_sonata_user_user_show'));
        }

        // admin_sonata_user_group_list
        if ($pathinfo === '/sonata/user/group/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
        }

        // admin_sonata_user_group_create
        if ($pathinfo === '/sonata/user/group/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
        }

        // admin_sonata_user_group_batch
        if ($pathinfo === '/sonata/user/group/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
        }

        // admin_sonata_user_group_edit
        if (0 === strpos($pathinfo, '/sonata/user/group') && preg_match('#^/sonata/user/group/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',)), array('_route' => 'admin_sonata_user_group_edit'));
        }

        // admin_sonata_user_group_delete
        if (0 === strpos($pathinfo, '/sonata/user/group') && preg_match('#^/sonata/user/group/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',)), array('_route' => 'admin_sonata_user_group_delete'));
        }

        // admin_sonata_user_group_show
        if (0 === strpos($pathinfo, '/sonata/user/group') && preg_match('#^/sonata/user/group/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',)), array('_route' => 'admin_sonata_user_group_show'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
