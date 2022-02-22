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
        '/add-events' => [[['_route' => 'add_events', '_controller' => 'App\\Controller\\EventController::addEvents'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events', '_controller' => 'App\\Controller\\EventController::events'], null, null, null, false, false, null]],
        '/events1' => [[['_route' => 'events1', '_controller' => 'App\\Controller\\EventController::events1'], null, null, null, false, false, null]],
        '/add-participation' => [[['_route' => 'add_participation', '_controller' => 'App\\Controller\\ParticipationController::addParticipation'], null, null, null, false, false, null]],
        '/participations' => [[['_route' => 'participations', '_controller' => 'App\\Controller\\ParticipationController::participations'], null, null, null, false, false, null]],
        '/test1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\Test1Controller::index'], null, null, null, false, false, null]],
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
                .'|/eventss/([^/]++)(*:186)'
                .'|/modify\\-(?'
                    .'|events/([^/]++)(*:221)'
                    .'|participation/([^/]++)(*:251)'
                .')'
                .'|/delete\\-(?'
                    .'|events/([^/]++)(*:287)'
                    .'|participations/([^/]++)(*:318)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'eventss', '_controller' => 'App\\Controller\\EventController::eventss'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'modify_events', '_controller' => 'App\\Controller\\EventController::modifyEvent'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'modify_participation', '_controller' => 'App\\Controller\\ParticipationController::modifyParticipation'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'delete_events', '_controller' => 'App\\Controller\\EventController::deleteEvent'], ['id'], null, null, false, true, null]],
        318 => [
            [['_route' => 'delete_participations', '_controller' => 'App\\Controller\\ParticipationController::deleteParticipation'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
