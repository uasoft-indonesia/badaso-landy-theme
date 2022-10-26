<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Helpers;

use Uasoft\Badaso\Models\Configuration;

class Configurations
{
    public static function index()
    {
        $configurations = Configuration::where('group', 'landyTheme')->get();
        foreach ($configurations as $key => $config) {
            if ($config->key == 'landyThemeSiteTitle') {
                $site_title = $config->value;
            }

        }

        $title = (object)[
            "siteTitle" => $site_title
        ];
        return $title;
    }
}
