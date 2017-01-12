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
                'type' => Literal::class,
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
                        'action'     => 'index',
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
            'layout/layout_category'           => __DIR__ . '/../view/layout/layout_category.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
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



    'navigation' => [
        // #1
        'default' => [
            [
                'label' => 'Index',
                'route' => 'home',
            ]
        ],
        // #2
        'category' => [
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
        'category_navigation' => Application\Navigation\Service\CategoryNavigationFactory::class, // <-- add this
    ],
    ],

      /*  //hrevert library -> create filter service
    'htimg' => [
        'filters' => [
            'my_thumbnail' => [ // this is  filter service
                'type' => 'thumbnail', // this is a filter loader
                'options' => [  // filter loader passes these options to a Filter which manipulates the image
                    'width' => 100,
                    'height' => 100
                    //'format' => 'jpeg' // format is optional and defaults to the format of given image
                ],
            ],        
        ],
    ],*/


];

// Create container from array
$container = new Zend\Navigation\Navigation($pages);

// Store the container in the proxy helper:
$view->plugin('navigation')->setContainer($container);

// ...or simply:
$view->navigation($container);