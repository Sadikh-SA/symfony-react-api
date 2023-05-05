<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/projet/produit' => [
            [['_route' => 'api_app_projet_produits', '_controller' => 'App\\Controller\\ProjetController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_project_produit_new', '_controller' => 'App\\Controller\\ProjetController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/projet/category' => [
            [['_route' => 'api_app_projet_categories', '_controller' => 'App\\Controller\\ProjetController::index_cat'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_project_categorie_new', '_controller' => 'App\\Controller\\ProjetController::new_Categorie'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/projet/fournisseur' => [
            [['_route' => 'api_app_projet_fournisseurs', '_controller' => 'App\\Controller\\ProjetController::indexFour'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_project_fournisseur_new', '_controller' => 'App\\Controller\\ProjetController::new_Fournisseur'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/register' => [[['_route' => 'api_app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/projet/(?'
                    .'|produit/([^/]++)(?'
                        .'|(*:41)'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:69)'
                    .')'
                    .'|fournisseur/([^/]++)(?'
                        .'|(*:100)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:138)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [
            [['_route' => 'api_project_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_project_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_project_delete_produit', '_controller' => 'App\\Controller\\ProjetController::delete_produit'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        69 => [
            [['_route' => 'api_project_categorie_show', '_controller' => 'App\\Controller\\ProjetController::show_Categorie'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_project_delete_categorie', '_controller' => 'App\\Controller\\ProjetController::delete_categorie'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        100 => [
            [['_route' => 'api_project_show_fournisseur', '_controller' => 'App\\Controller\\ProjetController::show_Fournisseur'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_project_edit_categorie', '_controller' => 'App\\Controller\\ProjetController::edit_fournisseur'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_project_delete_fournisseur', '_controller' => 'App\\Controller\\ProjetController::delete_fournisseur'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        138 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
