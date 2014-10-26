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
            'user.rest.user-profiles' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-profiles[/:user_id]',
                    'defaults' => array(
                        'controller' => 'User\\V3\\Rest\\UserProfiles\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'user.rest.users',
            1 => 'user.rest.user-profiles',
        ),
        'default_version' => 4,
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
                3 => 'GET',
                4 => 'PUT',
                5 => 'DELETE',
                6 => 'GET',
                7 => 'PUT',
                8 => 'DELETE',
                9 => 'GET',
                10 => 'PUT',
                11 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
                4 => 'GET',
                5 => 'POST',
                6 => 'GET',
                7 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
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
                3 => 'GET',
                4 => 'PUT',
                5 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'filter',
                1 => 'sort',
                2 => 'filter',
                3 => 'sort',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'User\\V2\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V2\\Rest\\Users\\UsersCollection',
            'service_name' => 'Users',
        ),
        'User\\V3\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V3\\Rest\\Users\\UsersResource',
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
            'entity_class' => 'User\\V3\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V3\\Rest\\Users\\UsersCollection',
            'service_name' => 'Users',
        ),
        'User\\V3\\Rest\\UserProfiles\\Controller' => array(
            'listener' => 'User\\V3\\Rest\\UserProfiles\\UserProfilesResource',
            'route_name' => 'user.rest.user-profiles',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user_profiles',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'User\\V3\\Rest\\UserProfiles\\UserProfilesEntity',
            'collection_class' => 'User\\V3\\Rest\\UserProfiles\\UserProfilesCollection',
            'service_name' => 'UserProfiles',
        ),
        'User\\V4\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V4\\Rest\\Users\\UsersResource',
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
            'entity_class' => 'User\\V4\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V4\\Rest\\Users\\UsersCollection',
            'service_name' => 'Users',
        ),
        'User\\V4\\Rest\\UserProfiles\\Controller' => array(
            'listener' => 'User\\V4\\Rest\\UserProfiles\\UserProfilesResource',
            'route_name' => 'user.rest.user-profiles',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user_profiles',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'User\\V4\\Rest\\UserProfiles\\UserProfilesEntity',
            'collection_class' => 'User\\V4\\Rest\\UserProfiles\\UserProfilesCollection',
            'service_name' => 'UserProfiles',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'User\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V2\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V3\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V3\\Rest\\UserProfiles\\Controller' => 'HalJson',
            'User\\V4\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V4\\Rest\\UserProfiles\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.user.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
                6 => 'application/vnd.user.v1+json',
                7 => 'application/hal+json',
                8 => 'application/json',
                9 => 'application/vnd.user.v1+json',
                10 => 'application/hal+json',
                11 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.user.v2+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'User\\V3\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v3+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V3\\Rest\\UserProfiles\\Controller' => array(
                0 => 'application/vnd.user.v3+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V4\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v4+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V4\\Rest\\UserProfiles\\Controller' => array(
                0 => 'application/vnd.user.v4+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.user.v1+json',
                3 => 'application/json',
                4 => 'application/vnd.user.v1+json',
                5 => 'application/json',
                6 => 'application/vnd.user.v1+json',
                7 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/json',
                2 => 'application/vnd.user.v2+json',
                3 => 'application/json',
            ),
            'User\\V3\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v3+json',
                1 => 'application/json',
            ),
            'User\\V3\\Rest\\UserProfiles\\Controller' => array(
                0 => 'application/vnd.user.v3+json',
                1 => 'application/json',
            ),
            'User\\V4\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v4+json',
                1 => 'application/json',
                2 => 'multipart/form-data',
            ),
            'User\\V4\\Rest\\UserProfiles\\Controller' => array(
                0 => 'application/vnd.user.v4+json',
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
                'is_collection' => '1',
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
            'User\\V3\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V3\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => '1',
            ),
            'User\\V3\\Rest\\UserProfiles\\UserProfilesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profiles',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'User\\V3\\Rest\\UserProfiles\\UserProfilesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profiles',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
            'User\\V4\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V4\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => '1',
            ),
            'User\\V4\\Rest\\UserProfiles\\UserProfilesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profiles',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'User\\V4\\Rest\\UserProfiles\\UserProfilesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profiles',
                'route_identifier_name' => 'user_id',
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
            'User\\V3\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V3\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V3\\Rest\\Users\\UsersResource\\Table',
                'resource_class' => 'User\\V3\\Rest\\Users\\UsersResource',
            ),
            'User\\V4\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V4\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V4\\Rest\\Users\\UsersResource\\Table',
                'resource_class' => 'User\\V4\\Rest\\Users\\UsersResource',
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
        'User\\V3\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V3\\Rest\\Users\\Validator',
        ),
        'User\\V3\\Rest\\UserProfiles\\Controller' => array(
            'input_filter' => 'User\\V3\\Rest\\UserProfiles\\Validator',
        ),
        'User\\V4\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V4\\Rest\\Users\\Validator',
        ),
        'User\\V4\\Rest\\UserProfiles\\Controller' => array(
            'input_filter' => 'User\\V4\\Rest\\UserProfiles\\Validator',
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
            4 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            5 => array(
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
            6 => array(
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
            7 => array(
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
            8 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            9 => array(
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
            10 => array(
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
            11 => array(
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
            12 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            13 => array(
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
            14 => array(
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
            15 => array(
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
            4 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'error_message' => 'User identifier must be an autoincremented integer',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            5 => array(
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
            6 => array(
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
            7 => array(
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
        'User\\V3\\Rest\\Users\\Validator' => array(
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
        'User\\V3\\Rest\\UserProfiles\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'firstname',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'lastname',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'websites',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'contacts',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'User\\V4\\Rest\\Users\\Validator' => array(
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
            4 => array(
                'name' => 'image',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\File\\RenameUpload',
                        'options' => array(
                            'randomize' => true,
                            'target' => 'data/uploads/',
                        ),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\File\\IsImage',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\File\\MimeType',
                        'options' => array(
                            'mimeType' => 'image/jpeg',
                        ),
                    ),
                ),
                'description' => 'User image',
                'error_message' => 'User must be a valid JPG file',
                'type' => 'Zend\\InputFilter\\FileInput',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
        ),
        'User\\V4\\Rest\\UserProfiles\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'firstname',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'lastname',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'email',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'websites',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'contacts',
                'required' => '1',
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
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
            'User\\V3\\Rest\\Users\\Controller' => array(
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
            'User\\V4\\Rest\\Users\\Controller' => array(
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
    'service_manager' => array(
        'factories' => array(
            'User\\V3\\Rest\\UserProfiles\\UserProfilesResource' => 'User\\V3\\Rest\\UserProfiles\\UserProfilesResourceFactory',
            'User\\V3\\Rest\\UserProfiles\\Table\\UserTable' => 'User\\V3\\Rest\\UserProfiles\\Table\\UserTableFactory',
            'User\\V3\\Rest\\UserProfiles\\Table\\WebsiteTable' => 'User\\V3\\Rest\\UserProfiles\\Table\\WebsiteTableFactory',
            'User\\V4\\Rest\\UserProfiles\\UserProfilesResource' => 'User\\V4\\Rest\\UserProfiles\\UserProfilesResourceFactory',
            'User\\V4\\Rest\\UserProfiles\\Table\\UserTable' => 'User\\V4\\Rest\\UserProfiles\\Table\\UserTableFactory',
            'User\\V4\\Rest\\UserProfiles\\Table\\WebsiteTable' => 'User\\V4\\Rest\\UserProfiles\\Table\\WebsiteTableFactory',
        ),
    ),
);
