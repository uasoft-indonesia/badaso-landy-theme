---
sidebar_position: 1
---

# Installation

1. Install [badaso](https://github.com/uasoft-indonesia/badaso), [badaso-content-module](https://github.com/uasoft-indonesia/badaso-content-module.git), and [badaso-post-module](https://github.com/uasoft-indonesia/badaso-post-module.git). After that, you can include the Badaso package with the following command.

```
composer require badaso/landy-theme
```

2. Run the following command.
```
npm install
```
3. Run the following command to setup the `badaso-core`.

```
php artisan badaso:setup
```

4. Run the following command to setup the `badaso-content`.

```
php artisan badaso-content:setup
```

5. Run the following command to setup the `badaso-post`.

```
php artisan badaso-post:setup
```
6. Run the following command to setup the `badaso-landy-theme`.

```
php artisan badaso-landy-theme:setup
composer dump-autoload
```

7. Run the following command to migrate all table.

```
php artisan migrate
```

8. Run the following command to generate seeder.

```
php artisan db:seed --class='Database\Seeders\Badaso\LandyTheme\BadasoLandyThemeSeeder'
```
or
```
php artisan db:seed
```

9. Add the plugins to your MIX_BADASO_MODULES to .env.
```
MIX_BADASO_MODULES=landy-theme
```

10. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
```
MIX_BADASO_MENU=admin,landy-theme
```

11. Fill the other variables in .env file.
```
    - `LANDPRO_THEME_PREFIX=landy` Set prefix for the theme.
```

12. Add Tailwind to your Laravel Mix configuration.In your `webpack.mix.js` file.
```
 mix.js("vendor/badaso/landy-theme/src/resources/js/app.js", "public/js/landy-theme.js")
        .js("vendor/badaso/landy-theme/src/resources/js/index/landy-theme.js", "public/js/index/landy-theme.js")
        .css('vendor/badaso/landy-theme/src/resources/app/assets/css/style.css', 'public/css/landy-theme.css',{}, [require('tailwindcss')('./tailwind-landy.config.js'),
        require("autoprefixer"),])
```

13. Start your build process. Run your build process with `npm run watch`.
```
npm run watch
```

