<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2018 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisCmsNewsComments\Model\Tables\Factory;

use MelisCmsNewsComments\Model\MelisCmsNewsComments;
use MelisUserTabs\Model\Tables\MelisCmsNewsCommentsTable;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ObjectProperty;


class MelisCmsNewsCommentsTableFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $hydratingResultSet = new HydratingResultSet(new ObjectProperty(), new MelisCmsNewsComments());
        $tableGateway = new TableGateway('melis_cms_news_comments', $sl->get('Zend\Db\Adapter\Adapter'), null, $hydratingResultSet);
        
        return new MelisCmsNewsCommentsTable($tableGateway);
    }
    
}