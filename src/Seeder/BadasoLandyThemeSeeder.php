<?php

namespace Database\Seeders\Badaso\JayaTheme;

use Illuminate\Database\Seeder;

class BadasoJayaThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JayaThemeMenusSeeder::class);
        $this->call(JayaThemeFixedMenuItemSeeder::class);
        $this->call(JayaThemePermissionsSeeder::class);
        $this->call(JayaThemeContentsSeeder::class);
        $this->call(JayaThemeConfigurationsSeeder::class);
    }
}
