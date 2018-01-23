<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/course')) {
            if (0 === strpos($pathinfo, '/courseinstance')) {
                // courseinstance_index
                if ('/courseinstance' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_courseinstance_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CourseInstanceController::indexAction',  '_route' => 'courseinstance_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'courseinstance_index'));
                    }

                    return $ret;
                }
                not_courseinstance_index:

                // courseinstance_new
                if ('/courseinstance/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_courseinstance_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CourseInstanceController::newAction',  '_route' => 'courseinstance_new',);
                }
                not_courseinstance_new:

                // courseinstance_show
                if (preg_match('#^/courseinstance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_courseinstance_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'courseinstance_show')), array (  '_controller' => 'AppBundle\\Controller\\CourseInstanceController::showAction',));
                }
                not_courseinstance_show:

                // courseinstance_edit
                if (preg_match('#^/courseinstance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_courseinstance_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'courseinstance_edit')), array (  '_controller' => 'AppBundle\\Controller\\CourseInstanceController::editAction',));
                }
                not_courseinstance_edit:

                // courseinstance_delete
                if (preg_match('#^/courseinstance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_courseinstance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'courseinstance_delete')), array (  '_controller' => 'AppBundle\\Controller\\CourseInstanceController::deleteAction',));
                }
                not_courseinstance_delete:

            }

            elseif (0 === strpos($pathinfo, '/coursesoftprerequisite')) {
                // coursesoftprerequisite_index
                if ('/coursesoftprerequisite' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_coursesoftprerequisite_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CourseSoftPrerequisiteController::indexAction',  '_route' => 'coursesoftprerequisite_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'coursesoftprerequisite_index'));
                    }

                    return $ret;
                }
                not_coursesoftprerequisite_index:

                // coursesoftprerequisite_new
                if ('/coursesoftprerequisite/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_coursesoftprerequisite_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CourseSoftPrerequisiteController::newAction',  '_route' => 'coursesoftprerequisite_new',);
                }
                not_coursesoftprerequisite_new:

                // coursesoftprerequisite_show
                if (preg_match('#^/coursesoftprerequisite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_coursesoftprerequisite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursesoftprerequisite_show')), array (  '_controller' => 'AppBundle\\Controller\\CourseSoftPrerequisiteController::showAction',));
                }
                not_coursesoftprerequisite_show:

                // coursesoftprerequisite_edit
                if (preg_match('#^/coursesoftprerequisite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_coursesoftprerequisite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursesoftprerequisite_edit')), array (  '_controller' => 'AppBundle\\Controller\\CourseSoftPrerequisiteController::editAction',));
                }
                not_coursesoftprerequisite_edit:

                // coursesoftprerequisite_delete
                if (preg_match('#^/coursesoftprerequisite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_coursesoftprerequisite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursesoftprerequisite_delete')), array (  '_controller' => 'AppBundle\\Controller\\CourseSoftPrerequisiteController::deleteAction',));
                }
                not_coursesoftprerequisite_delete:

            }

            elseif (0 === strpos($pathinfo, '/coursetype')) {
                // coursetype_index
                if ('/coursetype' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_coursetype_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CourseTypeController::indexAction',  '_route' => 'coursetype_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'coursetype_index'));
                    }

                    return $ret;
                }
                not_coursetype_index:

                // coursetype_new
                if ('/coursetype/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_coursetype_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CourseTypeController::newAction',  '_route' => 'coursetype_new',);
                }
                not_coursetype_new:

                // coursetype_show
                if (preg_match('#^/coursetype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_coursetype_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursetype_show')), array (  '_controller' => 'AppBundle\\Controller\\CourseTypeController::showAction',));
                }
                not_coursetype_show:

                // coursetype_edit
                if (preg_match('#^/coursetype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_coursetype_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursetype_edit')), array (  '_controller' => 'AppBundle\\Controller\\CourseTypeController::editAction',));
                }
                not_coursetype_edit:

                // coursetype_delete
                if (preg_match('#^/coursetype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_coursetype_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursetype_delete')), array (  '_controller' => 'AppBundle\\Controller\\CourseTypeController::deleteAction',));
                }
                not_coursetype_delete:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/email')) {
            // email_index
            if ('/email' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_email_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\EmailController::indexAction',  '_route' => 'email_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'email_index'));
                }

                return $ret;
            }
            not_email_index:

            // email_new
            if ('/email/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_email_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EmailController::newAction',  '_route' => 'email_new',);
            }
            not_email_new:

            // email_show
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_email_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_show')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::showAction',));
            }
            not_email_show:

            // email_edit
            if (preg_match('#^/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_email_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::editAction',));
            }
            not_email_edit:

            // email_delete
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_email_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_delete')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::deleteAction',));
            }
            not_email_delete:

        }

        elseif (0 === strpos($pathinfo, '/enrolled')) {
            // enrolled_index
            if ('/enrolled' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_enrolled_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\EnrolledController::indexAction',  '_route' => 'enrolled_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'enrolled_index'));
                }

                return $ret;
            }
            not_enrolled_index:

            // enrolled_new
            if ('/enrolled/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_enrolled_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnrolledController::newAction',  '_route' => 'enrolled_new',);
            }
            not_enrolled_new:

            // enrolled_show
            if (preg_match('#^/enrolled/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_enrolled_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_show')), array (  '_controller' => 'AppBundle\\Controller\\EnrolledController::showAction',));
            }
            not_enrolled_show:

            // enrolled_edit
            if (preg_match('#^/enrolled/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_enrolled_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_edit')), array (  '_controller' => 'AppBundle\\Controller\\EnrolledController::editAction',));
            }
            not_enrolled_edit:

            // enrolled_delete
            if (preg_match('#^/enrolled/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_enrolled_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_delete')), array (  '_controller' => 'AppBundle\\Controller\\EnrolledController::deleteAction',));
            }
            not_enrolled_delete:

        }

        elseif (0 === strpos($pathinfo, '/place')) {
            // place_index
            if ('/place' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_place_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\PlaceController::indexAction',  '_route' => 'place_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'place_index'));
                }

                return $ret;
            }
            not_place_index:

            // place_new
            if ('/place/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_place_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PlaceController::newAction',  '_route' => 'place_new',);
            }
            not_place_new:

            // place_show
            if (preg_match('#^/place/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_place_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_show')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::showAction',));
            }
            not_place_show:

            // place_edit
            if (preg_match('#^/place/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_place_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_edit')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::editAction',));
            }
            not_place_edit:

            // place_delete
            if (preg_match('#^/place/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_place_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_delete')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController::deleteAction',));
            }
            not_place_delete:

        }

        elseif (0 === strpos($pathinfo, '/role')) {
            // role_index
            if ('/role' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_role_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'role_index'));
                }

                return $ret;
            }
            not_role_index:

            // role_new
            if ('/role/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_role_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }
            not_role_new:

            // role_show
            if (preg_match('#^/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_role_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::showAction',));
            }
            not_role_show:

            // role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_role_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::editAction',));
            }
            not_role_edit:

            // role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_index'));
                }

                return $ret;
            }
            not_user_index:

            // user_new
            if ('/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        elseif (0 === strpos($pathinfo, '/workplace')) {
            // workplace_index
            if ('/workplace' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_workplace_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\WorkplaceController::indexAction',  '_route' => 'workplace_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'workplace_index'));
                }

                return $ret;
            }
            not_workplace_index:

            // workplace_new
            if ('/workplace/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_workplace_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\WorkplaceController::newAction',  '_route' => 'workplace_new',);
            }
            not_workplace_new:

            // workplace_show
            if (preg_match('#^/workplace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_workplace_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workplace_show')), array (  '_controller' => 'AppBundle\\Controller\\WorkplaceController::showAction',));
            }
            not_workplace_show:

            // workplace_edit
            if (preg_match('#^/workplace/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_workplace_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workplace_edit')), array (  '_controller' => 'AppBundle\\Controller\\WorkplaceController::editAction',));
            }
            not_workplace_edit:

            // workplace_delete
            if (preg_match('#^/workplace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_workplace_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workplace_delete')), array (  '_controller' => 'AppBundle\\Controller\\WorkplaceController::deleteAction',));
            }
            not_workplace_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
