<?php
/**
 * @copyright Copyright (c) 2014 WebPT, INC
 */
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'resource-register' => array(
                    'options' => array(
                        'route'    => 'acl register resources',
                        'defaults' => array(
                            'controller' => 'Acl\Controller\Console\Resource',
                            'action'     => 'registerResources'
                        )
                    )
                )
            )
        )
    ),
);