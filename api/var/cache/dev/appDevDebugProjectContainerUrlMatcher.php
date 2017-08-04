<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // edu_users
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'edu_users');
            }

            return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::getUsersAction',  '_route' => 'edu_users',);
        }

        // edu_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'edu_default_index');
            }

            return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::indexAction',  '_route' => 'edu_default_index',);
        }

        // user_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_list');
            }

            return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::getUsersAction',  '_route' => 'user_list',);
        }

        // user_info
        if (0 === strpos($pathinfo, '/user/info') && preg_match('#^/user/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_info')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::getUserInfoAction',));
        }

        // teacher_info
        if (0 === strpos($pathinfo, '/teacher/info') && preg_match('#^/teacher/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_info')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::getTeacherInfoAction',));
        }

        // student_info
        if (0 === strpos($pathinfo, '/student/info') && preg_match('#^/student/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_info')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::getStudentInfoAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_new
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::addNewUserAction',  '_route' => 'user_new',);
            }

            // user_edit_a
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit_a')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::userEditAction',));
            }

            // user_teachers
            if ($pathinfo === '/user/teachers') {
                return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::listTeachersAction',  '_route' => 'user_teachers',);
            }

            // user_students
            if ($pathinfo === '/user/students') {
                return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::listStudentAction',  '_route' => 'user_students',);
            }

            // user_edit
            if (0 === strpos($pathinfo, '/useredit') && preg_match('#^/useredit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::edituserAction',));
            }

            // user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::deleteuserAction',));
            }

        }

        // delete_user
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/class')) {
            if (0 === strpos($pathinfo, '/class/a')) {
                // class_all
                if ($pathinfo === '/class/all') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::listAllClassAction',  '_route' => 'class_all',);
                }

                // class_new
                if ($pathinfo === '/class/add') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::createNewClassAction',  '_route' => 'class_new',);
                }

            }

            // class_edit
            if (0 === strpos($pathinfo, '/class/edit') && preg_match('#^/class/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_edit')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::classEditAction',));
            }

            // class_delete_msg
            if (0 === strpos($pathinfo, '/class/delete') && preg_match('#^/class/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_delete_msg')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::deleteClassConfirmAction',));
            }

        }

        // class_delete
        if (0 === strpos($pathinfo, '/deleteclass') && preg_match('#^/deleteclass/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_delete')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::deleteClassAction',));
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/student')) {
                // student_manage
                if (0 === strpos($pathinfo, '/student/manage') && preg_match('#^/student/manage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_manage')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::studentAddClassAction',));
                }

                // student_update
                if ($pathinfo === '/student/update') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::updateStudentAction',  '_route' => 'student_update',);
                }

                // student_new
                if ($pathinfo === '/student/add') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::createStudentAction',  '_route' => 'student_new',);
                }

            }

            // show_student
            if (0 === strpos($pathinfo, '/show/student') && preg_match('#^/show/student/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_student')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::showStudentAction',));
            }

        }

        // teacher_addclass
        if (0 === strpos($pathinfo, '/teacher/add/class') && preg_match('#^/teacher/add/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_addclass')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::teacherAddClasses',));
        }

        if (0 === strpos($pathinfo, '/subject')) {
            if (0 === strpos($pathinfo, '/subject/a')) {
                // subject_all
                if ($pathinfo === '/subject/all') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::allSubjectssAction',  '_route' => 'subject_all',);
                }

                // subject_new
                if ($pathinfo === '/subject/add') {
                    return array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::createNewSubjectAction',  '_route' => 'subject_new',);
                }

            }

            // subject_edit
            if (0 === strpos($pathinfo, '/subject/edit') && preg_match('#^/subject/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_edit')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::subjectEditAction',));
            }

            if (0 === strpos($pathinfo, '/subject/delete')) {
                // subject_delete_msg
                if (preg_match('#^/subject/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_delete_msg')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::dellassConfirmAction',));
                }

                // subject_delete_confirm
                if (0 === strpos($pathinfo, '/subject/delete/confirm') && preg_match('#^/subject/delete/confirm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subject_delete_confirm')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::subjectDeleteConfirmAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/class')) {
            // class_subject_add
            if (0 === strpos($pathinfo, '/class/add/subject') && preg_match('#^/class/add/subject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_subject_add')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::addClassSubjectAction',));
            }

            // class_edit_subs
            if (0 === strpos($pathinfo, '/class/edit/subject') && preg_match('#^/class/edit/subject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_edit_subs')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::editClassSubjectsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/teacher')) {
            if (0 === strpos($pathinfo, '/teacher/edit')) {
                // teacher_edit_class
                if (0 === strpos($pathinfo, '/teacher/edit/class') && preg_match('#^/teacher/edit/class/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit_class')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::editTeacherClassAction',));
                }

                // teacher_edit_subs
                if (0 === strpos($pathinfo, '/teacher/edit/subject') && preg_match('#^/teacher/edit/subject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit_subs')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::editTeacherSubjectsAction',));
                }

            }

            // teacher_subject_add
            if (0 === strpos($pathinfo, '/teacher/add/subject') && preg_match('#^/teacher/add/subject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_subject_add')), array (  '_controller' => 'EDUBundle\\Controller\\DefaultController::addTeacherSubjectAction',));
            }

        }

        if (0 === strpos($pathinfo, '/l')) {
            // hello
            if ($pathinfo === '/lang') {
                return array (  '_controller' => 'EDUBundle\\Controller\\LocaleController::switchLangAction',  '_route' => 'hello',);
            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_security_login;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }
                    not_fos_user_security_login:

                    // fos_user_security_check
                    if ($pathinfo === '/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/logout') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_logout;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }
                not_fos_user_security_logout:

            }

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
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

                }

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
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

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

        if (0 === strpos($pathinfo, '/_trans')) {
            // jms_translation_update_message
            if (0 === strpos($pathinfo, '/_trans/api/configs') && preg_match('#^/_trans/api/configs/(?P<config>[^/]++)/domains/(?P<domain>[^/]++)/locales/(?P<locale>[^/]++)/messages$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_jms_translation_update_message;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_translation_update_message')), array (  'id' => NULL,  '_controller' => 'JMS\\TranslationBundle\\Controller\\ApiController::updateMessageAction',));
            }
            not_jms_translation_update_message:

            // jms_translation_index
            if (rtrim($pathinfo, '/') === '/_trans') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'jms_translation_index');
                }

                return array (  '_controller' => 'JMS\\TranslationBundle\\Controller\\TranslateController::indexAction',  '_route' => 'jms_translation_index',);
            }

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
