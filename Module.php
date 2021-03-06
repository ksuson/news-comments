<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2018 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisCmsNewsComments;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\ArrayUtils;
use Zend\Session\Container;
use MelisCmsNewsComments\Listener\MelisCmsNewsCommentsFlashMessengerListener;

/**
 * MelisNewsletter/Module.php
 * Class Module
 * @package MelisNewsletter
 */
class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
//        $eventManager->attach(new MelisCmsNewsCommentsFlashMessengerListener());
        $this->createTranslations($e);
    }

    public function getConfig()
    {
        $config = array();
        $configFiles = array(
            include __DIR__ . '/config/module.config.php',
            include __DIR__ . '/config/app.interface.php',
//            include __DIR__ . '/config/app.tools.php',
//            include __DIR__ . '/config/app.forms.php',

            // Templating plugins
//            include __DIR__ . '/../config/plugins/MelisCmsNewsCommentsPlugin.config.php',
        );

        foreach ($configFiles as $file) {
            $config = ArrayUtils::merge($config, $file);
        }

        return $config;
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function createTranslations($e)
    {
        $sm = $e->getApplication()->getServiceManager();
        $translator = $sm->get('translator');

        $container = new Container('meliscore');
        $locale = $container['melis-lang-locale'];

        if (!empty($locale)){

            $translationType = array(
                'interface',
            );

            $translationList = array();
            if(file_exists($_SERVER['DOCUMENT_ROOT'].'/../module/MelisModuleConfig/config/translation.list.php')){
                $translationList = include 'module/MelisModuleConfig/config/translation.list.php';
            }

            foreach($translationType as $type){

                $transPath = '';
                $moduleTrans = __NAMESPACE__."/$locale.$type.php";

                if(in_array($moduleTrans, $translationList)){
                    $transPath = "module/MelisModuleConfig/languages/".$moduleTrans;
                }

                if(empty($transPath)){

                    // if translation is not found, use melis default translations
                    $defaultLocale = (file_exists(__DIR__ . "/language/$locale.$type.php"))? $locale : "en_EN";
                    $transPath = __DIR__ . "/language/$defaultLocale.$type.php";
                }

                $translator->addTranslationFile('phparray', $transPath);
            }
        }
    }

}
