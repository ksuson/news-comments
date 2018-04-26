<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisUserTabs\Service\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use MelisUserTabs\Service\MelisCmsNewsCommentsService;

class MelisCmsNewsCommentsServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $service = new MelisCmsNewsCommentsService();
        $service->setServiceLocator($sl);

        return $service;
    }

}