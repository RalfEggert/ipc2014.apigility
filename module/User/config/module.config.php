<?php
return array(
    'router' => array(
        'routes' => array(
            'user.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'User\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'user.rest.users',
        ),
        'default_version' => 2,
    ),
    'zf-rest' => array(
        'User\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'user.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'User\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'Users',
        ),
        'User\\V2\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V2\\Rest\\Users\\UsersResource',
            'route_name' => 'user.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'filter',
                1 => 'sort',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'User\\V2\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V2\\Rest\\Users\\UsersCollection',
            'service_name' => 'Users',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'User\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V2\\Rest\\Users\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'User\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'User\\V2\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V2\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => '1',
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'User\\V1\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V1\\Rest\\Users\\UsersResource\\Table',
            ),
            'User\\V2\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V2\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V2\\Rest\\Users\\UsersResource\\Table',
                'resource_class' => 'User\\V2\\Rest\\Users\\UsersResource',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'User\\V1\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V1\\Rest\\Users\\Validator',
        ),
        'User\\V2\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V2\\Rest\\Users\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'User\\V1\\Rest\\Users\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            1 => array(
                'name' => 'firstname',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                        ),
                    ),
                ),
                'description' => 'User firstname',
                'error_message' => 'User firstname must be a string with max 32 chars',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            2 => array(
                'name' => 'lastname',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                        ),
                    ),
                ),
                'description' => 'User lastname',
                'error_message' => 'User lastname must be a string with max 32 chars',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            3 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => false,
                'continue_if_empty' => false,
                'description' => 'User email',
                'error_message' => 'User firstname must be a valid email address',
            ),
        ),
        'User\\V2\\Rest\\Users\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            1 => array(
                'name' => 'firstname',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                        ),
                    ),
                ),
                'description' => 'User firstname',
                'error_message' => 'User firstname must be a string with max 32 chars',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            2 => array(
                'name' => 'lastname',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                        ),
                    ),
                ),
                'description' => 'User lastname',
                'error_message' => 'User lastname must be a string with max 32 chars',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            3 => array(
                'name' => 'email',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => '',
                'continue_if_empty' => '',
                'description' => 'User email',
                'error_message' => 'User firstname must be a valid email address',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                'entity' => array(
                    'GET' => '',
                    'POST' => '',
                    'PATCH' => '',
                    'PUT' => '1',
                    'DELETE' => '1',
                ),
                'collection' => array(
                    'GET' => '',
                    'POST' => '1',
                    'PATCH' => '',
                    'PUT' => '',
                    'DELETE' => '',
                ),
            ),
        ),
    ),
);
