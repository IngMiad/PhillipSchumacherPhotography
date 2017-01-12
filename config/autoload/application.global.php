<?php
/*
 * This file path config/autoload/application.global.php
 */
return array(
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(
            // And finally, here is where we define our page hierarchy
            'home' => array(
                'label' => 'Home',
                'route' => 'home',
            ),
            'application' => array(
                'label' => 'Application',
                'controller' => 'category',
                'action' => 'index',
                'route' => 'application',
                'pages' => array(
                    'photography' => array(
                        'label' => 'photography',
                        'controller' => 'category', /* or create a seperate route insteed*/
                        'action' => 'photography',
                        'route' => 'application',
                    ),
                ),
            ),
        ),
    ),
);