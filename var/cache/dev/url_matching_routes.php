<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/myproject' => [[['_route' => 'app_my_project', '_controller' => 'App\\Controller\\MyProjectController::index'], null, null, null, false, false, null]],
        '/newproject' => [[['_route' => 'app_new_project', '_controller' => 'App\\Controller\\NewProjectController::index'], null, null, null, false, false, null]],
        '/addprojetct' => [[['_route' => 'app_addnew_project', '_controller' => 'App\\Controller\\NewProjectController::addProject'], null, null, null, false, false, null]],
        '/joinproject' => [[['_route' => 'app_join_project', '_controller' => 'App\\Controller\\NewProjectController::joinProject'], null, ['POST' => 0], null, false, false, null]],
        '/proj' => [[['_route' => 'app_proj_dispo', '_controller' => 'App\\Controller\\ProjDispoController::accueil'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\RegisterController::login'], null, null, null, false, false, null]],
        '/verification' => [[['_route' => 'app_verification', '_controller' => 'App\\Controller\\RegisterController::verification'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/enregistrement' => [[['_route' => 'app_enregistrement', '_controller' => 'App\\Controller\\RegisterController::enregistrement'], null, null, null, false, false, null]],
        '/enregistrement_error' => [[['_route' => 'app_enregistrement_error', '_controller' => 'App\\Controller\\RegisterController::enregistrement_error'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\RegisterController::deconnexion'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
