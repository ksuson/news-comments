<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisCmsNewsComments\Service;

use MelisCore\Service\MelisCoreGeneralService;
/**
 *
 * This service handles the user tabs system of Melis.
 *
 */
class MelisCmsNewsCommentsService extends MelisCoreGeneralService
{
    /**
     * This method will get the meliCoreTool
     */
    private function getTool()
    {
        $toolSvc = $this->getServiceLocator()->get('MelisCoreTool');
        return $toolSvc;
    }
}