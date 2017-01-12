<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
	    'navigation' => [
        'default' => [
            [
                'label' => 'Index',
                'route' => 'home',
            ]
        ],
        [
            'label' => 'Application',
            'route' => 'application',
            'pages' => [
                [
                'label' => 'app_photography',
                'route' => 'application',
                'action' => 'photography',
                ],
                [
                'label' => 'app_fineart',
                'route' => 'application',
                'action' => 'fineart',
                ],
                [
                'label' => 'app_illustration',
                'route' => 'application',
                'action' => 'illustration',
                ],
        ],
    ],
    ],


    'service_manager' => [
    'factories' => [
        'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', // <-- add this
    ],
    ],
];
