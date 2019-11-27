<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/classes' => [[['_route' => 'app_api_apiclasses', '_controller' => 'App\\Controller\\ApiController::APIclasses'], null, ['GET' => 0], null, false, false, null]],
        '/api/newclass' => [[['_route' => 'app_api_apiaddclass', '_controller' => 'App\\Controller\\ApiController::APIaddClass'], null, ['POST' => 0], null, false, false, null]],
        '/api/newstudent' => [[['_route' => 'app_api_apiaddstudent', '_controller' => 'App\\Controller\\ApiController::APIaddStudent'], null, ['POST' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\EcoleHomeController::home'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\EcoleHomeController::admin'], null, null, null, false, false, null]],
        '/home/classes' => [[['_route' => 'classes', '_controller' => 'App\\Controller\\EcoleHomeController::classes'], null, null, null, false, false, null]],
        '/home/students/delete/{id1,id2}' => [[['_route' => 'deleteStudent', '_controller' => 'App\\Controller\\EcoleHomeController::deleteStudent'], null, null, null, false, false, null]],
        '/home/new_class' => [[['_route' => 'newClass', '_controller' => 'App\\Controller\\EcoleHomeController::newClass'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|classes/([^/]++)(?'
                        .'|(*:196)'
                        .'|/students(*:213)'
                    .')'
                    .'|students/([^/]++)(*:239)'
                .')'
                .'|/home/classes/(?'
                    .'|([^/]++)(*:273)'
                    .'|delete/([^/]++)(*:296)'
                    .'|([^/]++)/students/new_student(*:333)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [
            [['_route' => 'app_api_apideleteclass', '_controller' => 'App\\Controller\\ApiController::APIdeleteClass'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_api_apiclass', '_controller' => 'App\\Controller\\ApiController::APIclass'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        213 => [[['_route' => 'app_api_apistudents', '_controller' => 'App\\Controller\\ApiController::APIstudents'], ['id'], ['POST' => 0], null, false, false, null]],
        239 => [[['_route' => 'app_api_apideletestudent', '_controller' => 'App\\Controller\\ApiController::APIdeleteStudent'], ['id'], ['DELETE' => 0], null, false, true, null]],
        273 => [[['_route' => 'students', '_controller' => 'App\\Controller\\EcoleHomeController::students'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'deleteClass', '_controller' => 'App\\Controller\\EcoleHomeController::deleteClass'], ['id'], null, null, false, true, null]],
        333 => [
            [['_route' => 'newStudent', '_controller' => 'App\\Controller\\EcoleHomeController::newStudent'], ['id'], null, null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
