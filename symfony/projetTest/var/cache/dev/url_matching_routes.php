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
        '/admin/adresse' => [[['_route' => 'adresse_index', '_controller' => 'App\\Controller\\AdresseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/adresse/new' => [[['_route' => 'adresse_new', '_controller' => 'App\\Controller\\AdresseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/color' => [[['_route' => 'color_index', '_controller' => 'App\\Controller\\ColorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/color/new' => [[['_route' => 'color_new', '_controller' => 'App\\Controller\\ColorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/energy' => [[['_route' => 'energy_index', '_controller' => 'App\\Controller\\EnergyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/energy/new' => [[['_route' => 'energy_new', '_controller' => 'App\\Controller\\EnergyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/marque' => [[['_route' => 'marque_index', '_controller' => 'App\\Controller\\MarqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/marque/new' => [[['_route' => 'marque_new', '_controller' => 'App\\Controller\\MarqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/options' => [[['_route' => 'options_index', '_controller' => 'App\\Controller\\OptionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/options/new' => [[['_route' => 'options_new', '_controller' => 'App\\Controller\\OptionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/type/vehicule' => [[['_route' => 'type_vehicule_index', '_controller' => 'App\\Controller\\TypeVehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type/vehicule/new' => [[['_route' => 'type_vehicule_new', '_controller' => 'App\\Controller\\TypeVehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicule/new' => [[['_route' => 'vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|adresse/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|color/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|energy/([^/]++)(?'
                        .'|(*:293)'
                        .'|/edit(*:306)'
                        .'|(*:314)'
                    .')'
                    .'|marque/([^/]++)(?'
                        .'|(*:341)'
                        .'|/edit(*:354)'
                        .'|(*:362)'
                    .')'
                    .'|options/([^/]++)(?'
                        .'|(*:390)'
                        .'|/edit(*:403)'
                        .'|(*:411)'
                    .')'
                    .'|type/vehicule/([^/]++)(?'
                        .'|(*:445)'
                        .'|/edit(*:458)'
                        .'|(*:466)'
                    .')'
                    .'|vehicule/([^/]++)(?'
                        .'|/edit(*:500)'
                        .'|(*:508)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(*:536)'
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
        198 => [[['_route' => 'adresse_show', '_controller' => 'App\\Controller\\AdresseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'adresse_edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'adresse_delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        245 => [[['_route' => 'color_show', '_controller' => 'App\\Controller\\ColorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'color_edit', '_controller' => 'App\\Controller\\ColorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'color_delete', '_controller' => 'App\\Controller\\ColorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'energy_show', '_controller' => 'App\\Controller\\EnergyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'energy_edit', '_controller' => 'App\\Controller\\EnergyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'energy_delete', '_controller' => 'App\\Controller\\EnergyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        341 => [[['_route' => 'marque_show', '_controller' => 'App\\Controller\\MarqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'marque_edit', '_controller' => 'App\\Controller\\MarqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'marque_delete', '_controller' => 'App\\Controller\\MarqueController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        390 => [[['_route' => 'options_show', '_controller' => 'App\\Controller\\OptionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'options_edit', '_controller' => 'App\\Controller\\OptionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        411 => [[['_route' => 'options_delete', '_controller' => 'App\\Controller\\OptionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        445 => [[['_route' => 'type_vehicule_show', '_controller' => 'App\\Controller\\TypeVehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'type_vehicule_edit', '_controller' => 'App\\Controller\\TypeVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'type_vehicule_delete', '_controller' => 'App\\Controller\\TypeVehiculeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        500 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        508 => [[['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        536 => [
            [['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
