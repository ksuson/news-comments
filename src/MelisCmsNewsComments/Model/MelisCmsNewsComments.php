<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisCmsNewsComments\Model;

class MelisCmsNewsComments
{
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}