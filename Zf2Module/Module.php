<?php
/**
 * @copyright Copyright (c) 2014 WebPT, INC
 */

namespace SchemaManager;


class Module {
//    public function getAutoloaderConfig()
//    {
//        return array(
//            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
//            ),
//            'Zend\Loader\StandardAutoloader' => array(
//                'namespaces' => array(
//                    __NAMESPACE__ => __DIR__ . '/src',
//                ),
//            ),
//        );
//    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
} 