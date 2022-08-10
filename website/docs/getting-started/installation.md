---
sidebar_position: 1
---

# Installation

1. You can install the landy theme with the following command.

```
composer require badaso/landy-theme
```

2. (Optional) Run the following command to setup the badaso-core. If you never run it before.

```
php artisan badaso:setup
```
3. (Optional) Run the following command to setup the badaso-content. If you never run it before.

```
php artisan badaso-content:setup
```

4. (Optional) Run the following command to setup the badaso-post. If you never run it before.

```
php artisan badaso-post:setup
```

5. Run the following command to setup the theme

```
php artisan badaso-landy-theme:setup
```

6. Run the following command to migrate database.

```
php artisan migrate
```

7. (Optional) Run the following command to generate seeder of badaso core, content module and post module. If you never run it before.

```
php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Post\BadasoPostModuleSeeder"

php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"
```

8. Run the command to generate seeder of Landy theme.

```
php artisan db:seed --class='Database\Seeders\Badaso\LandyTheme\BadasoLandyThemeSeeder'
```

9. Add the plugins to your MIX_POST_URL_PREFIX to .env.

```
MIX_BADASO_PLUGINS=content-module,post-module,landy-theme
```

10. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
```
MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,landy-theme
```

11. Install JS depedency
```
   npm install
```

12. Build JS dependency.
```
 npm run watch
```

13. Finished. You can access the landy theme
```
http://localhost:8000/landy
```

