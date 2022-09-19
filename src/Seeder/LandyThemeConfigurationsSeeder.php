<?php

namespace Database\Seeders\Badaso\LandyTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Configuration;

class LandyThemeConfigurationsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $settings = [
                0 => [
                    'key'          => 'landyThemeNavbarTitle',
                    'display_name' => 'Navigation Bar Title',
                    'value'        => 'Landy Theme',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 1,
                    'group'        => 'landyTheme',
                    'can_delete'   => 0,
                ],
                1 => [
                    'key'          => 'landyThemePrefixUrl',
                    'display_name' => 'Landy Theme prefix URL',
                    'value'        => '',
                    'details'      => '',
                    'type'         => 'text',
                    'order'        => 2,
                    'group'        => 'landyTheme',
                    'can_delete'   => 0,

                ],
                2 => [
                    'key'          => 'landyThemeIcon',
                    'display_name' => 'Icon Theme',
                    'value'        => 'photos/1/full-logo-badaso.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 3,
                    'group'        => 'landyTheme',
                    'can_delete'   => 0,

                ],
                3 => [
                    'key'          => 'landyThemeIconFooter',
                    'display_name' => 'Icon Theme Footer',
                    'value'        => 'photos/1/full-logo-badaso.png',
                    'details'      => '',
                    'type'         => 'upload_image',
                    'order'        => 4,
                    'group'        => 'menitTheme',
                    'can_delete'   => 0,
                ],
            ];

            foreach ($settings as $key => $value) {
                Configuration::where('key', $value['key'])->delete();
                Configuration::create($value);
            }

            DB::commit();
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }
    }
}
