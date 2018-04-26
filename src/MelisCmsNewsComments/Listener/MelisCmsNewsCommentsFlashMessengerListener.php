<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2018 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisCmsNewsComments\Listener;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use MelisCore\Listener\MelisCoreGeneralListener;

/**
 * This listener listens to MelisCmsNewsComments events in order to add entries in the
 * flash messenger
 */
class MelisCmsNewsCommentsFlashMessengerListener extends MelisCoreGeneralListener implements ListenerAggregateInterface
{

    /**
     * MelisCmsNewsComments/src/MelisCmsNewsComments/Listener/MelisCmsNewsCommentsFlashMessengerListener.php
     * Handles the flash messenger event listener
     * @param EventManagerInterface $events
     */
    public function attach(EventManagerInterface $events)
    {
        $sharedEvents      = $events->getSharedManager();

        $callBackHandler = $sharedEvents->attach(
            'MelisCmsNewsComments',
            array(
                'melis_cms_news_comments_flash_messenger'
            ),
            function($e){

                $sm = $e->getTarget()->getServiceLocator();
                $flashMessenger = $sm->get('MelisCoreFlashMessenger');

                $params = $e->getParams();
                $params['textTitle']   = $params['title'];
                $params['textMessage'] = $params['message'];
                $results = $e->getTarget()->forward()->dispatch(
                    'MelisCore\Controller\MelisFlashMessenger',
                    array_merge(array('action' => 'log'), $params)
                )->getVariables();
            },
            -1000);

        $this->listeners[] = $callBackHandler;
    }
}