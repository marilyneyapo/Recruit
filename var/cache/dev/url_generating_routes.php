<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_logout_main' => [[], [], [], [['text', '/logout']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'candidature_details' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::viewCandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/candidature']], [], [], []],
    'admin_notifications' => [[], ['_controller' => 'App\\Controller\\Admin\\NotificationController::index'], [], [['text', '/admin/notifications']], [], [], []],
    'category_questions' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::getQuestions'], [], [['text', '/questions'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_cv_download' => [['id'], ['_controller' => 'App\\Controller\\CvController::downloadCv'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cv/download']], [], [], []],
    'job.index' => [[], ['_controller' => 'App\\Controller\\JobController::index'], [], [['text', '/job/']], [], [], []],
    'job.list' => [[], ['_controller' => 'App\\Controller\\JobController::list'], [], [['text', '/job/list']], [], [], []],
    'job.show' => [['id'], ['_controller' => 'App\\Controller\\JobController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job']], [], [], []],
    'job.apply' => [['id'], ['_controller' => 'App\\Controller\\JobController::apply'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/joblist/apply']], [], [], []],
    'app_job_search' => [[], ['_controller' => 'App\\Controller\\JobController::search'], [], [['text', '/job/search']], [], [], []],
    'app_login_check' => [[], ['_controller' => 'App\\Controller\\LoginController::loginCheck'], [], [['text', '/login_check']], [], [], []],
    'app_redirect_after_login' => [[], ['_controller' => 'App\\Controller\\LoginController::redirectAfterLogin'], [], [['text', '/redirect_after_login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\JobController::index'], [], [['text', '/']], [], [], []],
    'jobs_by_category' => [['category'], ['_controller' => 'App\\Controller\\JobController::listByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/jobs/category']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\JobController::list'], [], [['text', '/list']], [], [], []],
    'app_cv' => [['id'], ['_controller' => 'App\\Controller\\CvController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cv']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'easy_admin_bundle' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/\\admin']], [], [], []],
    'App\Controller\Admin\AdminController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\Admin\AdminController::notifications' => [[], ['_controller' => 'App\\Controller\\Admin\\NotificationController::index'], [], [['text', '/admin/notifications']], [], [], []],
    'App\Controller\Admin\AdminController::viewCandidature' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::viewCandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/candidature']], [], [], []],
    'App\Controller\Admin\NotificationController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\NotificationController::index'], [], [['text', '/admin/notifications']], [], [], []],
    'App\Controller\CategoryController::getQuestions' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::getQuestions'], [], [['text', '/questions'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'App\Controller\CvController::index' => [['id'], ['_controller' => 'App\\Controller\\CvController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cv']], [], [], []],
    'App\Controller\CvController::downloadCv' => [['id'], ['_controller' => 'App\\Controller\\CvController::downloadCv'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cv/download']], [], [], []],
    'App\Controller\JobController::index' => [[], ['_controller' => 'App\\Controller\\JobController::index'], [], [['text', '/job/']], [], [], []],
    'App\Controller\JobController::list' => [[], ['_controller' => 'App\\Controller\\JobController::list'], [], [['text', '/job/list']], [], [], []],
    'App\Controller\JobController::listByCategory' => [['category'], ['_controller' => 'App\\Controller\\JobController::listByCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/jobs/category']], [], [], []],
    'App\Controller\JobController::show' => [['id'], ['_controller' => 'App\\Controller\\JobController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job']], [], [], []],
    'App\Controller\JobController::apply' => [['id'], ['_controller' => 'App\\Controller\\JobController::apply'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/joblist/apply']], [], [], []],
    'App\Controller\JobController::search' => [[], ['_controller' => 'App\\Controller\\JobController::search'], [], [['text', '/job/search']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::loginCheck' => [[], ['_controller' => 'App\\Controller\\LoginController::loginCheck'], [], [['text', '/login_check']], [], [], []],
    'App\Controller\LoginController::redirectAfterLogin' => [[], ['_controller' => 'App\\Controller\\LoginController::redirectAfterLogin'], [], [['text', '/redirect_after_login']], [], [], []],
    'App\Controller\LoginController::logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile']], [], [], []],
];
