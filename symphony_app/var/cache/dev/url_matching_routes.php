<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/users' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
        '/users/add' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\UserController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/users/([^/]++)(?'
                    .'|(*:25)'
                    .'|/(?'
                        .'|edit(*:40)'
                        .'|delete(*:53)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null]],
        40 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null]],
        53 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
