<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'orders_index_front' => [[], ['_controller' => 'App\\Controller\\OrdersController::indexFront'], [], [['text', '/orders/front']], [], []],
    'orders_add_front' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::addOrder'], [], [['variable', '', '[^/]++', 'id'], ['text', '/orders/front/buy']], [], []],
    'orders_remove_front' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::removeOrder'], [], [['variable', '', '[^/]++', 'id'], ['text', '/orders/front/remove']], [], []],
    'orders_index' => [[], ['_controller' => 'App\\Controller\\OrdersController::index'], [], [['text', '/orders/']], [], []],
    'order_index_pack' => [[], ['_controller' => 'App\\Controller\\OrdersController::orderedPackShow'], [], [['text', '/orders/indexPack']], [], []],
    'order_index_status' => [[], ['_controller' => 'App\\Controller\\OrdersController::orderedStatusShow'], [], [['text', '/orders/indexStatus']], [], []],
    'order_pdf' => [[], ['_controller' => 'App\\Controller\\OrdersController::pdf'], [], [['text', '/orders/pdf']], [], []],
    'orders_accepted' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::acceptOrder'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/orders/accept']], [], []],
    'orders_declined' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::declineOrder'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/orders/decline']], [], []],
    'orders_new' => [[], ['_controller' => 'App\\Controller\\OrdersController::new'], [], [['text', '/orders/new']], [], []],
    'orders_show' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/orders']], [], []],
    'orders_edit' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/orders']], [], []],
    'orders_delete' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/orders']], [], []],
    'pack_index' => [[], ['_controller' => 'App\\Controller\\PackController::index'], [], [['text', '/pack/index']], [], []],
    'pack_pdf' => [[], ['_controller' => 'App\\Controller\\PackController::pdf'], [], [['text', '/pack/pdf']], [], []],
    'pack_index_front' => [[], ['_controller' => 'App\\Controller\\PackController::frontIndex'], [], [['text', '/pack/front']], [], []],
    'pack_index_prix' => [[], ['_controller' => 'App\\Controller\\PackController::orderedPriceShow'], [], [['text', '/pack/indexPrix']], [], []],
    'pack_index_name' => [[], ['_controller' => 'App\\Controller\\PackController::orderedNameShow'], [], [['text', '/pack/indexName']], [], []],
    'pack_new' => [[], ['_controller' => 'App\\Controller\\PackController::new'], [], [['text', '/pack/new']], [], []],
    'pack_show' => [['id'], ['_controller' => 'App\\Controller\\PackController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/pack']], [], []],
    'pack_edit' => [['id'], ['_controller' => 'App\\Controller\\PackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/pack']], [], []],
    'pack_delete' => [['id'], ['_controller' => 'App\\Controller\\PackController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/pack']], [], []],
];
