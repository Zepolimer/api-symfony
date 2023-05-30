<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/groupes' => [[['_route' => 'groupes', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupes'], null, ['GET' => 0], null, false, false, null]],
        '/api/groupes/users' => [[['_route' => 'groupe-users', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-users'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/all' => [[['_route' => 'admin-users', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'admin-users'], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'register', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|groupes/(?'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(*:191)'
                            .'|create(*:205)'
                            .'|([^/]++)/(?'
                                .'|modify(?'
                                    .'|(*:234)'
                                    .'|/users(*:248)'
                                .')'
                                .'|remove(*:263)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(*:296)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(*:333)'
                                .'|([^/]++)/(?'
                                    .'|addgroupe(*:362)'
                                    .'|update(*:376)'
                                    .'|remove(*:390)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:431)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        191 => [[['_route' => '_api_/groupes/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => '_api_/groupes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'groupe-create', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-create'], [], ['POST' => 0], null, false, false, null]],
        234 => [[['_route' => 'groupe-modify', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-modify'], ['id'], ['PUT' => 0], null, false, false, null]],
        248 => [[['_route' => 'groupe-modify-users', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-modify-users'], ['id'], ['PUT' => 0], null, false, false, null]],
        263 => [[['_route' => 'groupe-remove', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-remove'], ['id'], ['DELETE' => 0], null, false, false, null]],
        296 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'user-addgroupe', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-addgroupe'], ['id'], ['POST' => 0], null, false, false, null]],
        376 => [[['_route' => 'user-update', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-update'], ['id'], ['PUT' => 0], null, false, false, null]],
        390 => [[['_route' => 'user-remove', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-remove'], ['id'], ['DELETE' => 0], null, false, false, null]],
        431 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
