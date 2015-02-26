<?php
namespace ArangoODMModule;

return [
	'console' => [
		'router' => [
			'routes' => [
				'arango-odm' => [
					'options' => [
						'route'	=> 'arango-odm :action [-v] [--down]',
						'defaults' => [
							'controller' => __NAMESPACE__ . '\Controller\CliController'
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
	]
];
