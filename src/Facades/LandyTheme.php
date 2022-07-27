<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Facades;

use Illuminate\Support\Facades\Facade;

class LandyTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'badaso-landy-theme';
    }
}
