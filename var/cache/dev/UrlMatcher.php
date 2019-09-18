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
        '/admin/info' => [[['_route' => 'admin_profile_info', '_controller' => 'App\\Controller\\AdminController::information'], null, null, null, false, false, null]],
        '/candidacy' => [[['_route' => 'candidacy', '_controller' => 'App\\Controller\\CandidacyController::index'], null, null, null, false, false, null]],
        '/admin/candidate' => [[['_route' => 'candidate_index', '_controller' => 'App\\Controller\\CandidateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/admin/selection' => [[['_route' => 'selection_index', '_controller' => 'App\\Controller\\SelectionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/selection/new' => [[['_route' => 'selection_new', '_controller' => 'App\\Controller\\SelectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|candidate/(?'
                        .'|([^/]++)(?'
                            .'|(*:203)'
                            .'|/edit(*:216)'
                            .'|(*:224)'
                        .')'
                        .'|admin/selection/([^/]++)/selection(*:267)'
                    .')'
                    .'|selection/(?'
                        .'|([^/]++)(?'
                            .'|(*:300)'
                            .'|/edit(*:313)'
                            .'|(*:321)'
                        .')'
                        .'|admin/selection/([^/]++)/selection(*:364)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:389)'
                        .'|/edit(*:402)'
                        .'|(*:410)'
                    .')'
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
        203 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CandidateController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        267 => [[['_route' => 'candidateStatus', '_controller' => 'App\\Controller\\CandidateController::candidateStatus'], ['id'], null, null, false, false, null]],
        300 => [[['_route' => 'selection_show', '_controller' => 'App\\Controller\\SelectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'selection_edit', '_controller' => 'App\\Controller\\SelectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [[['_route' => 'selection_delete', '_controller' => 'App\\Controller\\SelectionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        364 => [[['_route' => 'selectionStatus', '_controller' => 'App\\Controller\\SelectionController::selectionStatus'], ['id'], null, null, false, false, null]],
        389 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
