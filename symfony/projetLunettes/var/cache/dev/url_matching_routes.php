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
        '/nouveautes_lunettes' => [[['_route' => 'nouveautes_lunettes', '_controller' => 'App\\Controller\\AfficheNewsLunettesController::index'], null, null, null, false, false, null]],
        '/banque' => [[['_route' => 'banque_index', '_controller' => 'App\\Controller\\BanqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/banque/new' => [[['_route' => 'banque_new', '_controller' => 'App\\Controller\\BanqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/couleur' => [[['_route' => 'couleur_index', '_controller' => 'App\\Controller\\CouleurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/couleur/new' => [[['_route' => 'couleur_new', '_controller' => 'App\\Controller\\CouleurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/genre' => [[['_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/genre/new' => [[['_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/lunettes/new' => [[['_route' => 'lunettes_new', '_controller' => 'App\\Controller\\LunettesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/admin/tva' => [[['_route' => 'tva_index', '_controller' => 'App\\Controller\\TvaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/tva/new' => [[['_route' => 'tva_new', '_controller' => 'App\\Controller\\TvaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/type' => [[['_route' => 'type_index', '_controller' => 'App\\Controller\\TypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type/new' => [[['_route' => 'type_new', '_controller' => 'App\\Controller\\TypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/banque/([^/]++)(*:185)'
                .'|/([^/]++)(?'
                    .'|/edit(*:210)'
                    .'|(*:218)'
                .')'
                .'|/panier(*:234)'
                .'|/admin/(?'
                    .'|panier/(?'
                        .'|add/([^/]++)(*:274)'
                        .'|remove/([^/]++)(*:297)'
                    .')'
                    .'|couleur/([^/]++)(?'
                        .'|(*:325)'
                        .'|/edit(*:338)'
                        .'|(*:346)'
                    .')'
                    .'|genre/([^/]++)(?'
                        .'|(*:372)'
                        .'|/edit(*:385)'
                        .'|(*:393)'
                    .')'
                    .'|lunettes/([^/]++)(?'
                        .'|/edit(*:427)'
                        .'|(*:435)'
                    .')'
                    .'|t(?'
                        .'|va/([^/]++)(?'
                            .'|(*:462)'
                            .'|/edit(*:475)'
                            .'|(*:483)'
                        .')'
                        .'|ype/([^/]++)(?'
                            .'|(*:507)'
                            .'|/edit(*:520)'
                            .'|(*:528)'
                        .')'
                    .')'
                .')'
                .'|/contact(*:547)'
                .'|/femmes(*:562)'
                .'|/hommes(*:577)'
                .'|/l(?'
                    .'|unettes(?'
                        .'|(*:600)'
                        .'|/([^/]++)(*:617)'
                    .')'
                    .'|og(?'
                        .'|in(*:633)'
                        .'|out(*:644)'
                    .')'
                .')'
                .'|/register(*:663)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'banque_show', '_controller' => 'App\\Controller\\BanqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'banque_edit', '_controller' => 'App\\Controller\\BanqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'banque_delete', '_controller' => 'App\\Controller\\BanqueController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        234 => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], [], null, null, false, false, null]],
        274 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'couleur_show', '_controller' => 'App\\Controller\\CouleurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'couleur_edit', '_controller' => 'App\\Controller\\CouleurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'couleur_delete', '_controller' => 'App\\Controller\\CouleurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        372 => [[['_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        427 => [[['_route' => 'lunettes_edit', '_controller' => 'App\\Controller\\LunettesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        435 => [[['_route' => 'lunettes_delete', '_controller' => 'App\\Controller\\LunettesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        462 => [[['_route' => 'tva_show', '_controller' => 'App\\Controller\\TvaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'tva_edit', '_controller' => 'App\\Controller\\TvaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'tva_delete', '_controller' => 'App\\Controller\\TvaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        507 => [[['_route' => 'type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'type_edit', '_controller' => 'App\\Controller\\TypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'type_delete', '_controller' => 'App\\Controller\\TypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        547 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], [], null, null, false, false, null]],
        562 => [[['_route' => 'femmes', '_controller' => 'App\\Controller\\FemmesController::index'], [], null, null, false, false, null]],
        577 => [[['_route' => 'hommes', '_controller' => 'App\\Controller\\HommesController::index'], [], null, null, false, false, null]],
        600 => [[['_route' => 'lunettes_index', '_controller' => 'App\\Controller\\LunettesController::index'], [], ['GET' => 0], null, false, false, null]],
        617 => [[['_route' => 'lunettes_show', '_controller' => 'App\\Controller\\LunettesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        644 => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        663 => [
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
