---
sidebar_position: 1
---

# Installation

1. You can install the landy theme with the following command.

```
composer require badaso/landy-theme
```

2. (<b>Optional</b>) Run the following command to setup the badaso-core. If you never run it before.

```
php artisan badaso:setup
```
3. (<b>Optional</b>) Run the following command to setup the badaso-content. If you never run it before.

```
php artisan badaso-content:setup
```

4. Run the following command to setup the theme

```
php artisan badaso-landy-theme:setup
```

5. Run the following command to migrate database.

```
php artisan migrate
```

6. (Optional) Run the following command to generate seeder of badaso core, and content module. If you never run it before.

```
php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
```

7. Run the command to generate seeder of Landy theme.

```
php artisan db:seed --class='Database\Seeders\Badaso\LandyTheme\BadasoLandyThemeSeeder'
```

8. Add the plugins to your MIX_BADASO_PLUGINS to .env.

```
MIX_BADASO_PLUGINS=content-module,landy-theme
```

9. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
```
MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,landy-theme
```

10. Install JS depedency
```
   npm install
```

11. Build JS dependency.
```
 npm run watch
```

12. Finished. You can access the landy theme
```
http://localhost:8000/landy
```

