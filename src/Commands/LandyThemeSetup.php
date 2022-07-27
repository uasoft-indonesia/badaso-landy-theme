<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class LandyThemeSetup extends Command
{
    protected $file;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'badaso-landy-theme:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup Badaso Landy Theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = app('files');
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->updatePackageJson();
        $this->publishConfig();
        $this->addingBadasoEnv();
        $this->updateWebpackMix();

    }

    protected function publishConfig()
    {
        Artisan::call('vendor:publish', ['--tag' => 'BadasoLandyTheme']);

        $this->info('Badaso landy theme provider published');
    }

    protected function checkExist($file, $search)
    {
        return $this->file->exists($file) && !Str::contains($this->file->get($file), $search);
    }

    protected function updateWebpackMix()
    {
        $mix_file = base_path('webpack.mix.js');
        $search = 'Badaso Landy Theme';

        if ($this->checkExist($mix_file, $search)) {
            $data =
                <<<'EOT'

        // BadasoLandyTheme
        const path = require('path');
        mix.js("vendor/badaso/landy-theme/src/resources/js/app.js", "public/js/landy-theme.js")
             .postCss('vendor/badaso/landy-theme/src/resources/app/assets/css/style.css', 'public/css/landy-theme.css', [require('tailwindcss')])
            .alias({
                '@': path.join(__dirname, 'vendor/badaso')
            })

        EOT;

            $this->file->append($mix_file, $data);
        }

        $this->info('webpack.mix.js updated');
    }

    protected function envListUpload()
    {
        return [
            'LANDY_THEME_PREFIX' => 'landy',
        ];
    }

    protected function addingBadasoEnv()
    {
        try {
            $env_path = base_path('.env');

            $env_file = file_get_contents($env_path);
            $arr_env_file = explode("\n", $env_file);

            $env_will_adding = $this->envListUpload();

            $new_env_adding = [];
            foreach ($env_will_adding as $key_add_env => $val_add_env) {
                $status_adding = true;
                foreach ($arr_env_file as $key_env_file => $val_env_file) {
                    $val_env_file = trim($val_env_file);
                    if (substr($val_env_file, 0, 1) != '#' && $val_env_file != '' && strstr($val_env_file, $key_add_env)) {
                        $status_adding = false;
                        break;
                    }
                }
                if ($status_adding) {
                    $new_env_adding[] = "{$key_add_env}={$val_add_env}";
                }
            }

            foreach ($new_env_adding as $index_env_add => $val_env_add) {
                $arr_env_file[] = $val_env_add;
            }

            $env_file = join("\n", $arr_env_file);
            file_put_contents($env_path, $env_file);

            $this->info('Adding badaso env');
        } catch (\Exception $e) {
            $this->error('Failed adding badaso env '.$e->getMessage());
        }
    }

    protected function updatePackageJson()
    {
        $package_json = file_get_contents(base_path('package.json'));
        $decoded_json = json_decode($package_json, true);

        $decoded_json['dependencies']['daisyui'] = '^2.13.6';
        $decoded_json['dependencies']['alpinejs'] = '^3.10.2';

        $decoded_json['devDependencies']['tailwindcss'] = '^3.0.23';
        $decoded_json['devDependencies']['postcss'] = '^8.1.14';

        $encoded_json = json_encode($decoded_json, JSON_PRETTY_PRINT);
        file_put_contents(base_path('package.json'), $encoded_json);

        $this->info('package.json updated');
    }
}
