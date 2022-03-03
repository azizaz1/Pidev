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
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\BoutiqueController::index'], null, null, null, false, false, null]],
        '/rech' => [[['_route' => 'rech', '_controller' => 'App\\Controller\\BoutiqueController::produitParCategorie'], null, null, null, true, false, null]],
        '/cart' => [[['_route' => 'cart_', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/pdff' => [[['_route' => 'pdff', '_controller' => 'App\\Controller\\CartController::pdff'], null, null, null, false, false, null]],
        '/add-category' => [[['_route' => 'addcategory', '_controller' => 'App\\Controller\\CategoryController::addcategory'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::category'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'produits', '_controller' => 'App\\Controller\\ProduitController::produits'], null, null, null, false, false, null]],
        '/add-produit' => [[['_route' => 'add_produit', '_controller' => 'App\\Controller\\ProduitController::addProduit'], null, null, null, false, false, null]],
        '/incc' => [[['_route' => 'incc', '_controller' => 'App\\Controller\\inc::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\indexController::index'], null, null, null, false, false, null]],
        '/innc' => [[['_route' => 'innc', '_controller' => 'App\\Controller\\innc::index'], null, null, null, false, false, null]],
        '/test1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\test1Controller::index'], null, null, null, false, false, null]],
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
                .'|/add/([^/]++)(*:182)'
                .'|/remove/([^/]++)(*:206)'
                .'|/delete(?'
                    .'|/([^/]++)(*:233)'
                    .'|\\-(?'
                        .'|category/([^/]++)(*:263)'
                        .'|produit/([^/]++)(*:287)'
                    .')'
                .')'
                .'|/m(?'
                    .'|odify\\-(?'
                        .'|category/([^/]++)(*:329)'
                        .'|produit/([^/]++)(*:353)'
                    .')'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:414)'
                        .'|([A-z0-9_-]*)/(.+)(*:440)'
                    .')'
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
        182 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::deletecategory'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'delete_produit', '_controller' => 'App\\Controller\\ProduitController::deleteProduit'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'modify_category', '_controller' => 'App\\Controller\\CategoryController::modifycategory'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'modify_produit', '_controller' => 'App\\Controller\\ProduitController::modifyProduit'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        440 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
