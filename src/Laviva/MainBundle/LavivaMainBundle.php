<?php

namespace Laviva\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LavivaMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
