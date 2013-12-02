<?php
// http://stackoverflow.com/questions/13007477/doctrine-2-and-zf2-integration
namespace BTK; // SUPER important for Doctrine othervise can not find the Entities

return array(
	'controllers' => array(
        'invokables' => array(
            'BTK\Controller\Index' => 'BTK\Controller\IndexController',
        ),
    ),
	
    'router' => array(
        'routes' => array(
			'btk' => array(
				'type'    => 'Literal',
				'options' => array(
					'route'    => '/btk',
					'defaults' => array(
						'__NAMESPACE__' => 'btk\Controller',
						'controller'    => 'Index',
						'action'        => 'index',
					),
				),
				'may_terminate' => true,
				'child_routes' => array(
					'default' => array(
						'type'    => 'Segment',
						'options' => array(
							'route'    => '/[:controller[/:action[/:id]]]', // !!! SUPER important use grace-drops/default  grace-drops/<segment>in url helper
							'constraints' => array(
								'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id' => '[0-9]*'
							),
							'defaults' => array(
								'__NAMESPACE__' => 'BTK\Controller',
								'controller'    => 'Index',
								'action'        => 'index',
							),
						),
					),
				),
			),
		),
	),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/index.phtml',
            'btk/index/index' => __DIR__ . '/../view/btk/index/index.phtml',

            //'layout/btk'           => __DIR__ . '/../view/layout/btk.phtml',
            //'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            //'btk/index/index' => __DIR__ . '/../view/btk/index/index.phtml',

            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),		
);