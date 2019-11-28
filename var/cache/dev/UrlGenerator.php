<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_api_apideleteclass' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIdeleteClass'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/classes']], [], []],
    'app_api_apideletestudent' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIdeleteStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/students']], [], []],
    'api_classes' => [[], ['_controller' => 'App\\Controller\\ApiController::APIclasses'], [], [['text', '/api/classes']], [], []],
    'app_api_apiclass' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIclass'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/classes']], [], []],
    'app_api_apistudents' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIstudents'], [], [['text', '/students'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/classes']], [], []],
    'app_api_apiaddclass' => [[], ['_controller' => 'App\\Controller\\ApiController::APIaddClass'], [], [['text', '/api/newclass']], [], []],
    'app_api_apiaddstudent' => [[], ['_controller' => 'App\\Controller\\ApiController::APIaddStudent'], [], [['text', '/api/newstudent']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::home'], [], [['text', '/home']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::admin'], [], [['text', '/admin']], [], []],
    'classes' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::classes'], [], [['text', '/home/classes']], [], []],
    'students' => [['id'], ['_controller' => 'App\\Controller\\EcoleHomeController::students'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/home/classes']], [], []],
    'deleteStudent' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::deleteStudent'], [], [['text', '/home/students/delete/{id1,id2}']], [], []],
    'deleteClass' => [['id'], ['_controller' => 'App\\Controller\\EcoleHomeController::deleteClass'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/home/classes/delete']], [], []],
    'newClass' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::newClass'], [], [['text', '/home/new_class']], [], []],
    'newStudent' => [['id'], ['_controller' => 'App\\Controller\\EcoleHomeController::newStudent'], [], [['text', '/students/new_student/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/home/classes']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
