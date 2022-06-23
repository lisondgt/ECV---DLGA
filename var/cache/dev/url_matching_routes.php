<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actualites/press' => [[['_route' => 'actualites_press', '_controller' => 'App\\Controller\\ActualitesController::press'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/cabinet/presentation' => [[['_route' => 'cabinet_presentation', '_controller' => 'App\\Controller\\CabinetController::presentation'], null, null, null, false, false, null]],
        '/cabinet/equipe' => [[['_route' => 'cabinet_equipe', '_controller' => 'App\\Controller\\CabinetController::equipe'], null, null, null, false, false, null]],
        '/cabinet/reseau' => [[['_route' => 'cabinet_reseau', '_controller' => 'App\\Controller\\CabinetController::reseau'], null, null, null, false, false, null]],
        '/calendar/show' => [[['_route' => 'show_calendar', '_controller' => 'App\\Controller\\CalendarController::show'], null, null, null, false, false, null]],
        '/expertise/competences' => [[['_route' => 'expertise_competences', '_controller' => 'App\\Controller\\ExpertiseController::competences'], null, null, null, false, false, null]],
        '/expertise/secteur-intervention' => [[['_route' => 'expertise_secteur_intervention', '_controller' => 'App\\Controller\\ExpertiseController::secteurActivites'], null, null, null, false, false, null]],
        '/formation/new' => [[['_route' => 'new_formation', '_controller' => 'App\\Controller\\FormationController::new'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'show_formation', '_controller' => 'App\\Controller\\FormationController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/send/mail/([^/]++)(*:188)'
                .'|/formation/(?'
                    .'|inscription/([^/]++)(*:230)'
                    .'|export/utilisateur/([^/]++)(*:265)'
                .')'
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
        188 => [[['_route' => 'send_mail', '_controller' => 'App\\Controller\\Admin\\MailerController::sendMail'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'inscription_formation', '_controller' => 'App\\Controller\\FormationController::inscription'], ['id'], null, null, false, true, null]],
        265 => [
            [['_route' => 'formation_export_utilisateur', '_controller' => 'App\\Controller\\FormationController::exportUtilisateurs'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
