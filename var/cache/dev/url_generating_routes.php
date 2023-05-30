<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    'groupes' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupes'], [], [['text', '/api/groupes']], [], [], []],
    'groupe-users' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-users'], [], [['text', '/api/groupes/users']], [], [], []],
    '_api_/groupes/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => '_api_/groupes/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/groupes']], [], [], []],
    'groupe-create' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-create'], [], [['text', '/api/groupes/create']], [], [], []],
    'groupe-modify' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-modify'], [], [['text', '/modify'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/groupes']], [], [], []],
    'groupe-modify-users' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-modify-users'], [], [['text', '/modify/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/groupes']], [], [], []],
    'groupe-remove' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_operation_name' => 'groupe-remove'], [], [['text', '/remove'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/groupes']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    'admin-users' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'admin-users'], [], [['text', '/api/users/all']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    'register' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'register'], [], [['text', '/api/register']], [], [], []],
    'user-addgroupe' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-addgroupe'], [], [['text', '/addgroupe'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'user-update' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'user-remove' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user-remove'], [], [['text', '/remove'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
];
