<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'actualites_press' => [[], ['_controller' => 'App\\Controller\\ActualitesController::press'], [], [['text', '/actualites/press']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'send_mail' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MailerController::sendMail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/send/mail']], [], [], []],
    'cabinet_presentation' => [[], ['_controller' => 'App\\Controller\\CabinetController::presentation'], [], [['text', '/cabinet/presentation']], [], [], []],
    'cabinet_equipe' => [[], ['_controller' => 'App\\Controller\\CabinetController::equipe'], [], [['text', '/cabinet/equipe']], [], [], []],
    'cabinet_reseau' => [[], ['_controller' => 'App\\Controller\\CabinetController::reseau'], [], [['text', '/cabinet/reseau']], [], [], []],
    'show_calendar' => [[], ['_controller' => 'App\\Controller\\CalendarController::show'], [], [['text', '/calendar/show']], [], [], []],
    'expertise_competences' => [[], ['_controller' => 'App\\Controller\\ExpertiseController::competences'], [], [['text', '/expertise/competences']], [], [], []],
    'expertise_secteur_intervention' => [[], ['_controller' => 'App\\Controller\\ExpertiseController::secteurActivites'], [], [['text', '/expertise/secteur-intervention']], [], [], []],
    'new_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::new'], [], [['text', '/formation/new']], [], [], []],
    'show_formation' => [[], ['_controller' => 'App\\Controller\\FormationController::show'], [], [['text', '/formations']], [], [], []],
    'inscription_formation' => [['id'], ['_controller' => 'App\\Controller\\FormationController::inscription'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation/inscription']], [], [], []],
    'formation_export_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\FormationController::exportUtilisateurs'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation/export/utilisateur']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
];