<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/evenement/list' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\EvenementController::list'], null, null, null, false, false, null]],
        '/evenement/add' => [[['_route' => 'adde', '_controller' => 'App\\Controller\\EvenementController::add'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, false, false, null]],
        '/hotel/list' => [[['_route' => 'listh', '_controller' => 'App\\Controller\\HotelController::list'], null, null, null, false, false, null]],
        '/hotel/add' => [[['_route' => 'addh', '_controller' => 'App\\Controller\\HotelController::add'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produit/list' => [[['_route' => 'listp', '_controller' => 'App\\Controller\\ProduitController::list'], null, null, null, false, false, null]],
        '/produit/add' => [[['_route' => 'addp', '_controller' => 'App\\Controller\\ProduitController::add'], null, null, null, false, false, null]],
        '/publication/listo' => [[['_route' => 'listo', '_controller' => 'App\\Controller\\PublicationController::listo'], null, null, null, false, false, null]],
        '/publication' => [[['_route' => 'publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publication/pubs' => [[['_route' => 'pubs', '_controller' => 'App\\Controller\\PublicationController::lespub'], null, ['GET' => 0], null, false, false, null]],
        '/publication/new' => [[['_route' => 'publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/list' => [[['_route' => 'listr', '_controller' => 'App\\Controller\\ReservationController::list'], null, null, null, false, false, null]],
        '/reservation/add' => [[['_route' => 'addr', '_controller' => 'App\\Controller\\ReservationController::add'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/list' => [[['_route' => 'listu', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'addu', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
        '/voiture' => [[['_route' => 'voiture', '_controller' => 'App\\Controller\\VoitureController::index'], null, null, null, false, false, null]],
        '/voiture/list' => [[['_route' => 'listv', '_controller' => 'App\\Controller\\VoitureController::list'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'addv', '_controller' => 'App\\Controller\\VoitureController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/comment/(?'
                    .'|lescom/([^/]++)(*:69)'
                    .'|new/([^/]++)(*:88)'
                    .'|([^/]++)(?'
                        .'|(*:106)'
                        .'|/edit(*:119)'
                        .'|(*:127)'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|delete/([^/]++)(*:166)'
                    .'|update/([^/]++)(*:189)'
                .')'
                .'|/hotel/(?'
                    .'|delete/([^/]++)(*:223)'
                    .'|update/([^/]++)(*:246)'
                .')'
                .'|/p(?'
                    .'|roduit/(?'
                        .'|delete/([^/]++)(*:285)'
                        .'|update/([^/]++)(*:308)'
                    .')'
                    .'|ublication/(?'
                        .'|([^/]++)(?'
                            .'|(*:342)'
                            .'|/edit(*:355)'
                            .'|(*:363)'
                        .')'
                        .'|publication_delete_user/([^/]++)(*:404)'
                    .')'
                .')'
                .'|/reservation/(?'
                    .'|delete/([^/]++)(*:445)'
                    .'|update/([^/]++)(*:468)'
                .')'
                .'|/user/(?'
                    .'|delete/([^/]++)(*:501)'
                    .'|update/([^/]++)(*:524)'
                .')'
                .'|/voiture/(?'
                    .'|delete/([^/]++)(*:560)'
                    .'|update/([^/]++)(*:583)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'lescom', '_controller' => 'App\\Controller\\CommentController::lescom'], ['id'], ['GET' => 0], null, false, true, null]],
        88 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        106 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        119 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        127 => [
            [['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'comment_delete_comment', '_controller' => 'App\\Controller\\CommentController::delete1'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        166 => [[['_route' => 'deletee', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], null, null, false, true, null]],
        189 => [[['_route' => 'updatee', '_controller' => 'App\\Controller\\EvenementController::update'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'deleteh', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'updateh', '_controller' => 'App\\Controller\\HotelController::update'], ['id'], null, null, false, true, null]],
        285 => [[['_route' => 'deletep', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'updatep', '_controller' => 'App\\Controller\\ProduitController::update'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'publication_delete_user', '_controller' => 'App\\Controller\\PublicationController::deleteuser'], ['id'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'deleter', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'updater', '_controller' => 'App\\Controller\\ReservationController::update'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'deleteu', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'updateu', '_controller' => 'App\\Controller\\UserController::update'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'deletev', '_controller' => 'App\\Controller\\VoitureController::delete'], ['id'], null, null, false, true, null]],
        583 => [
            [['_route' => 'updatev', '_controller' => 'App\\Controller\\VoitureController::update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
