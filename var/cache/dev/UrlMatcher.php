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
        '/orders/front' => [[['_route' => 'orders_index_front', '_controller' => 'App\\Controller\\OrdersController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/orders' => [[['_route' => 'orders_index', '_controller' => 'App\\Controller\\OrdersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/indexPack' => [[['_route' => 'order_index_pack', '_controller' => 'App\\Controller\\OrdersController::orderedPackShow'], null, ['GET' => 0], null, false, false, null]],
        '/orders/indexStatus' => [[['_route' => 'order_index_status', '_controller' => 'App\\Controller\\OrdersController::orderedStatusShow'], null, ['GET' => 0], null, false, false, null]],
        '/orders/pdf' => [[['_route' => 'order_pdf', '_controller' => 'App\\Controller\\OrdersController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/orders/new' => [[['_route' => 'orders_new', '_controller' => 'App\\Controller\\OrdersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pack/index' => [[['_route' => 'pack_index', '_controller' => 'App\\Controller\\PackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pack/pdf' => [[['_route' => 'pack_pdf', '_controller' => 'App\\Controller\\PackController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/pack/front' => [[['_route' => 'pack_index_front', '_controller' => 'App\\Controller\\PackController::frontIndex'], null, ['GET' => 0], null, false, false, null]],
        '/pack/indexPrix' => [[['_route' => 'pack_index_prix', '_controller' => 'App\\Controller\\PackController::orderedPriceShow'], null, ['GET' => 0], null, false, false, null]],
        '/pack/indexName' => [[['_route' => 'pack_index_name', '_controller' => 'App\\Controller\\PackController::orderedNameShow'], null, ['GET' => 0], null, false, false, null]],
        '/pack/new' => [[['_route' => 'pack_new', '_controller' => 'App\\Controller\\PackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/orders/(?'
                    .'|front/(?'
                        .'|buy([^/]++)(*:200)'
                        .'|remove([^/]++)(*:222)'
                    .')'
                    .'|accept/([^/]++)(*:246)'
                    .'|decline/([^/]++)(*:270)'
                    .'|([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/pack/([^/]++)(?'
                    .'|(*:337)'
                    .'|/edit(*:350)'
                    .'|(*:358)'
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
        200 => [[['_route' => 'orders_add_front', '_controller' => 'App\\Controller\\OrdersController::addOrder'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'orders_remove_front', '_controller' => 'App\\Controller\\OrdersController::removeOrder'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'orders_accepted', '_controller' => 'App\\Controller\\OrdersController::acceptOrder'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        270 => [[['_route' => 'orders_declined', '_controller' => 'App\\Controller\\OrdersController::declineOrder'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'orders_edit', '_controller' => 'App\\Controller\\OrdersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'orders_delete', '_controller' => 'App\\Controller\\OrdersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'pack_show', '_controller' => 'App\\Controller\\PackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'pack_edit', '_controller' => 'App\\Controller\\PackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [
            [['_route' => 'pack_delete', '_controller' => 'App\\Controller\\PackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
