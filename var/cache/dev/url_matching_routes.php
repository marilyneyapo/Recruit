<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout'], null, ['POST' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/notifications' => [[['_route' => 'admin_notifications', '_controller' => 'App\\Controller\\Admin\\NotificationController::index'], null, null, null, false, false, null]],
        '/job' => [[['_route' => 'job.index', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, true, false, null]],
        '/job/list' => [[['_route' => 'job.list', '_controller' => 'App\\Controller\\JobController::list'], null, ['GET' => 0], null, false, false, null]],
        '/login_check' => [[['_route' => 'app_login_check', '_controller' => 'App\\Controller\\LoginController::loginCheck'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\LoginController::resetPassword'], null, null, null, false, false, null]],
        '/redirect_after_login' => [[['_route' => 'app_redirect_after_login', '_controller' => 'App\\Controller\\LoginController::redirectAfterLogin'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\JobController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\JobController::list'], null, null, null, false, false, null]],
        '/\\admin' => [[['_route' => 'easy_admin_bundle', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|ndidature/([^/]++)(*:229)'
                        .'|tegory/([^/]++)/questions(*:262)'
                    .')'
                    .'|v/(?'
                        .'|download/([^/]++)(*:293)'
                        .'|([^/]++)(*:309)'
                    .')'
                .')'
                .'|/admin/candidat/([^/]++)/statut/([^/]++)(*:359)'
                .'|/job(?'
                    .'|/(?'
                        .'|([^/]++)(*:386)'
                        .'|search(*:400)'
                    .')'
                    .'|list/apply/([^/]++)(*:428)'
                    .'|s/category/([^/]++)(*:455)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'candidature_details', '_controller' => 'App\\Controller\\Admin\\AdminController::viewCandidature'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'category_questions', '_controller' => 'App\\Controller\\CategoryController::getQuestions'], ['id'], ['GET' => 0], null, false, false, null]],
        293 => [[['_route' => 'app_cv_download', '_controller' => 'App\\Controller\\CvController::downloadCv'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'app_cv', '_controller' => 'App\\Controller\\CvController::index'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'update_statut', '_controller' => 'App\\Controller\\Admin\\AdminController::updateStatut'], ['id', 'statut'], null, null, false, true, null]],
        386 => [[['_route' => 'job.show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_job_search', '_controller' => 'App\\Controller\\JobController::search'], [], null, null, false, false, null]],
        428 => [[['_route' => 'job.apply', '_controller' => 'App\\Controller\\JobController::apply'], ['id'], ['GET' => 0], null, false, true, null]],
        455 => [
            [['_route' => 'jobs_by_category', '_controller' => 'App\\Controller\\JobController::listByCategory'], ['category'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
