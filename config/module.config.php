<?php
/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2018 Melis Technology (http://www.melistechnology.com)
 *
 */

return array(
    'router' => array(
        'routes' => array(
            'melis-backoffice' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/melis[/]',
                ),
                'child_routes' => array(
                    'application-MelisCmsNewsComments' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'MelisCmsNewsComments',
                            'defaults' => array(
                                '__NAMESPACE__' => 'MelisCmsNewsComments\Controller',
                                'controller'    => 'MelisCmsNewsCommentsTab',
                                'action'        => 'test',
                            ),
                        ),
                        // this route will be accessible in the browser by browsing
                        // www.domain.com/melis/MelisCmsNewsComments/controller/action
                        'may_terminate' => true,
                        'child_routes' => array(
                            'default' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/[:controller[/:action]]',
                                    'constraints' => array(
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ),
                                    'defaults' => array(
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    
    'translator' => array(
        'locale' => 'en_EN',
    ),
    
    'service_manager' => array(
        'invokables' => array(
            
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'factories' => array(
            //service
        ),
    ),
    
    'controllers' => array(
        'invokables' => array(
            'MelisCmsNewsComments\Controller\MelisCmsNewsCommentsTab' => 'MelisCmsNewsComments\Controller\MelisCmsNewsCommentsTabController',
        ),
    ),
    'form_elements' => array(
        'factories' => array(
            
        ),
    ),
    'asset_manager' => array(
        'resolver_configs' => array(
            'aliases' => array(
                'MelisCmsNewsComments/' => __DIR__ . '/../public/',
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'template_map' => array(
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);