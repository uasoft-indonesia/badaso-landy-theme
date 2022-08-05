<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Helpers;

class Route
{
    public static function getController($key)
    {
        // get config 'controllers' from config/badaso-landy-theme.php
        $controllers = config('badaso-landy-theme.controllers');

        // if the key is not found, return $key
        if (!isset($controllers[$key])) {
            return 'Uasoft\\Badaso\\Theme\\LandyTheme\\Controllers\\'.$key;
        }

        // return the value of the key
        return $controllers[$key];
    }
}
