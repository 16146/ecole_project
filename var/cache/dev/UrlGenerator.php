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
    'api_classes' => [[], ['_controller' => 'App\\Controller\\ApiController::APIclasses'], [], [['text', '/api/classes']], [], []],
    'api_add_classes' => [[], ['_controller' => 'App\\Controller\\ApiController::APIaddClass'], [], [['text', '/api/classes']], [], []],
    'api_edit_class' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\ApiController::APIaddClass'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/classes']], [], []],
    'api_deleteClass' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIdeleteClass'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/classes']], [], []],
    'api_students' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIstudents'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/students']], [], []],
    'api_add_students' => [[], ['_controller' => 'App\\Controller\\ApiController::APIaddStudent'], [], [['text', '/api/students']], [], []],
    'api_edit_student' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIaddStudent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/students']], [], []],
    'api_delete_students' => [['id'], ['_controller' => 'App\\Controller\\ApiController::APIdeleteStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/students']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::home'], [], [['text', '/home']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::admin'], [], [['text', '/admin']], [], []],
    'classes' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::classes'], [], [['text', '/home/classes']], [], []],
    'students' => [['name_class'], ['_controller' => 'App\\Controller\\EcoleHomeController::students'], [], [['variable', '/', '[^/]++', 'name_class', true], ['text', '/home/classes']], [], []],
    'deleteStudent' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::deleteStudent'], [], [['text', '/home/students/delete/{id,name_class}']], [], []],
    'deleteClass' => [['name_class'], ['_controller' => 'App\\Controller\\EcoleHomeController::deleteClass'], [], [['variable', '/', '[^/]++', 'name_class', true], ['text', '/home/classes/delete']], [], []],
    'newClass' => [[], ['_controller' => 'App\\Controller\\EcoleHomeController::newClass'], [], [['text', '/home/new_class']], [], []],
    'editClass' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\EcoleHomeController::newClass'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/home/editClass']], [], []],
    'newStudent' => [['nameClass'], ['nameClass' => null, '_controller' => 'App\\Controller\\EcoleHomeController::newStudent'], [], [['text', '/students/new_student/'], ['variable', '/', '[^/]++', 'nameClass', true], ['text', '/home/classes']], [], []],
    'editStudent' => [['id'], ['_controller' => 'App\\Controller\\EcoleHomeController::newStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/home/editStudent']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
