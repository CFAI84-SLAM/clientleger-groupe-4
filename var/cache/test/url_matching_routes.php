<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/produit/([^/]++)(*:24)'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:55)'
                    .'|/edit(*:67)'
                    .'|(*:74)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:118)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:154)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:185)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:224)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'produit.detail', '_controller' => 'App\\Controller\\ProductController::detail'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['idUtilisateur'], ['GET' => 0], null, false, true, null]],
        67 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['idUtilisateur'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        74 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['idUtilisateur'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        154 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        224 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
