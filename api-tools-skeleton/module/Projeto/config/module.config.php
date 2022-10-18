<?php
return [
    'router' => [
        'routes' => [
            'projeto.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'Projeto\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'projeto.rest.user',
        ],
    ],
    'api-tools-rest' => [
        'Projeto\\V1\\Rest\\User\\Controller' => [
            'listener' => 'Projeto\\V1\\Rest\\User\\UserResource',
            'route_name' => 'projeto.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Projeto\V1\Rest\User\UserEntity::class,
            'collection_class' => \Projeto\V1\Rest\User\UserCollection::class,
            'service_name' => 'user',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Projeto\\V1\\Rest\\User\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Projeto\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.projeto.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Projeto\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.projeto.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Projeto\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'projeto.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Projeto\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'projeto.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Projeto\\V1\\Rest\\User\\UserResource' => [
                'adapter_name' => 'dummy',
                'table_name' => 'user',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Projeto\\V1\\Rest\\User\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
];
