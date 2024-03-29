<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'nouveautes_lunettes' => [[], ['_controller' => 'App\\Controller\\AfficheNewsLunettesController::index'], [], [['text', '/nouveautes_lunettes']], [], []],
    'banque_index' => [[], ['_controller' => 'App\\Controller\\BanqueController::index'], [], [['text', '/banque']], [], []],
    'banque_new' => [[], ['_controller' => 'App\\Controller\\BanqueController::new'], [], [['text', '/admin/banque/new']], [], []],
    'banque_show' => [['id'], ['_controller' => 'App\\Controller\\BanqueController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/banque']], [], []],
    'banque_edit' => [['id'], ['_controller' => 'App\\Controller\\BanqueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], []],
    'banque_delete' => [['id'], ['_controller' => 'App\\Controller\\BanqueController::delete'], [], [['variable', '/', '[^/]++', 'id', true]], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/panier']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/panier/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/panier/remove']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'couleur_index' => [[], ['_controller' => 'App\\Controller\\CouleurController::index'], [], [['text', '/admin/couleur/']], [], []],
    'couleur_new' => [[], ['_controller' => 'App\\Controller\\CouleurController::new'], [], [['text', '/admin/couleur/new']], [], []],
    'couleur_show' => [['id'], ['_controller' => 'App\\Controller\\CouleurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/couleur']], [], []],
    'couleur_edit' => [['id'], ['_controller' => 'App\\Controller\\CouleurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/couleur']], [], []],
    'couleur_delete' => [['id'], ['_controller' => 'App\\Controller\\CouleurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/couleur']], [], []],
    'femmes' => [[], ['_controller' => 'App\\Controller\\FemmesController::index'], [], [['text', '/femmes']], [], []],
    'genre_index' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/admin/genre/']], [], []],
    'genre_new' => [[], ['_controller' => 'App\\Controller\\GenreController::new'], [], [['text', '/admin/genre/new']], [], []],
    'genre_show' => [['id'], ['_controller' => 'App\\Controller\\GenreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/genre']], [], []],
    'genre_edit' => [['id'], ['_controller' => 'App\\Controller\\GenreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/genre']], [], []],
    'genre_delete' => [['id'], ['_controller' => 'App\\Controller\\GenreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/genre']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'hommes' => [[], ['_controller' => 'App\\Controller\\HommesController::index'], [], [['text', '/hommes']], [], []],
    'lunettes_index' => [[], ['_controller' => 'App\\Controller\\LunettesController::index'], [], [['text', '/lunettes']], [], []],
    'lunettes_new' => [[], ['_controller' => 'App\\Controller\\LunettesController::new'], [], [['text', '/admin/lunettes/new']], [], []],
    'lunettes_show' => [['id'], ['_controller' => 'App\\Controller\\LunettesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/lunettes']], [], []],
    'lunettes_edit' => [['id'], ['_controller' => 'App\\Controller\\LunettesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/lunettes']], [], []],
    'lunettes_delete' => [['id'], ['_controller' => 'App\\Controller\\LunettesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/lunettes']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'tva_index' => [[], ['_controller' => 'App\\Controller\\TvaController::index'], [], [['text', '/admin/tva/']], [], []],
    'tva_new' => [[], ['_controller' => 'App\\Controller\\TvaController::new'], [], [['text', '/admin/tva/new']], [], []],
    'tva_show' => [['id'], ['_controller' => 'App\\Controller\\TvaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tva']], [], []],
    'tva_edit' => [['id'], ['_controller' => 'App\\Controller\\TvaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tva']], [], []],
    'tva_delete' => [['id'], ['_controller' => 'App\\Controller\\TvaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/tva']], [], []],
    'type_index' => [[], ['_controller' => 'App\\Controller\\TypeController::index'], [], [['text', '/admin/type/']], [], []],
    'type_new' => [[], ['_controller' => 'App\\Controller\\TypeController::new'], [], [['text', '/admin/type/new']], [], []],
    'type_show' => [['id'], ['_controller' => 'App\\Controller\\TypeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/type']], [], []],
    'type_edit' => [['id'], ['_controller' => 'App\\Controller\\TypeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/type']], [], []],
    'type_delete' => [['id'], ['_controller' => 'App\\Controller\\TypeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/type']], [], []],
];
