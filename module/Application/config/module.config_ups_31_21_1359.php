<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/index',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/category[/:action]',
                    'defaults' => [
                        'controller' => Controller\CategoryController::class,
                        'action'     => 'photography',
                        'layout'    => 'layout/layout_category.phtml'
                    ],
                ],
            ],
        ],
    ],


    'controllers' => [
        'factories' => [
            Controller\CategoryController::class => InvokableFactory::class,
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],


    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index' => __DIR__ . '/../view/application/index/index.phtml',
            'application/category/photography' => __DIR__ . '/../view/application/category/photography.phtml',
            'application/category/fineart' => __DIR__ . '/../view/application/category/fineart.phtml',
            'application/category/illustrations' => __DIR__ . '/../view/application/category/illustrations.phtml',
            'application/category/picture' => __DIR__ . '/../view/application/category/picture.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'service_manager' => [
    'factories' => [
        'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', // <-- add this
    ],
    'navigation' => [
        'default' => [
            [
                'label' => 'index',
                'route' => 'index'
            ]
        ],
        [
                    'label' => 'application',
                    'route' => 'category/[:action]',
                    'pages' => [
                        [
                            'label' => 'application',
                            'route' => 'category/[:action]',
                            'action' => 'photography',
                        ],  
                         [
                            'label' => 'application',
                            'route' => 'category/[:action]',
                            'action' => 'fineart',
                        ],   
                         [
                            'label' => 'application',
                            'route' => 'category/[:action]',
                            'action' => 'illustrations',
                        ],     

    ],

];
