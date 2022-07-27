<?php

namespace Database\Seeders\Badaso\JayaTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\Menu;

class JayaThemeMenusSeeder extends Seeder
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
            $menus = [
                0 => [
                    'key'          => 'jaya-theme',
                    'display_name' => 'Jaya Theme',
                ],
            ];

            $new_menus = [];
            foreach ($menus as $key => $value) {
                $menu = Menu::where('key', $value['key'])->first();

                if (isset($menu)) {
                    continue;
                }
                Menu::create($value);
            }
        } catch (Exception $e) {
            throw new Exception('Exception occur '.$e);
            DB::rollBack();
        }

        DB::commit();
    }
}
