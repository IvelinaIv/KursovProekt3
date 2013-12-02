<?php
return array(
    'acl' => array(
        'roles' => array(
            'guest'   => null,
            'member'  => 'guest',
            'admin'  => 'member',
        ),
        'resources' => array(
            'allow' => array(
				'CsnUser\Controller\Registration' => array(
				/*'changePassword' => 'member',
					'editProfile' => 'member',
					'changeEmail' => 'member',
					'forgottenPassword' => 'guest'*/
					
					'all' => 'guest'
				),
				'CsnUser\Controller\Index' => array(
					'login'   => 'guest',
					'logout'  => 'member',
					'index' => 'guest',
				),			
			
				'BTK\Controller\Index' => array(
					'all'	=> 'guest'					
				),
				'Zend' => array(
					'uri'   => 'member'
				),
				'Application\Controller\Index' => array(
					'index'   => 'guest',
				),
            )
        )
    )
);
