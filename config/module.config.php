<?php
namespace ArangoOdmModule;

return [
    'console' => [
        'router' => [
            'routes' => [
                'arango-odm' => [
                    'options' => [
                        'route'    => 'arango-odm generate-documents',
                        'defaults' => [
                            'controller' => __NAMESPACE__ . '\Controller\Cli',
                            'action' => 'generateDocuments'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'invokables' => [
            __NAMESPACE__ . '\Controller\Cli' => __NAMESPACE__ . '\Controller\CliController',
        ],
    ],
    'service_manager' => [
        'factories' => [
            'arango-document-manager' => __NAMESPACE__ . '\Service\DocumentManagerServiceFactory'
        ]
    ]
];
