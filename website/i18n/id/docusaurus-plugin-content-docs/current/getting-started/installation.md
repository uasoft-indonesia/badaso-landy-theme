---
sidebar_position: 1
---

# Installation

1. Install [badaso](https://github.com/uasoft-indonesia/badaso),[badaso-content-module](https://github.com/uasoft-indonesia/badaso-content-module.git) dan [badaso-post-module](https://github.com/uasoft-indonesia/badaso-post-module). Setelah itu, Anda dapat memasukkan paket Badaso dengan perintah berikut.

```
composer require badaso/landy-theme
```

2. Jalankan perintah berikut.
```
npm install
```

3. Jalankan perintah berikut untuk mengatur `badaso-core`.

```
php artisan badaso:setup
```
4. Jalankan perintah berikut untuk mengatur `badaso-content`.

```
php artisan badaso-content:setup
```
5. Jalankan perintah berikut untuk mengatur `badaso-post`.

```
php artisan badaso-post:setup
```

6. Jalankan perintah berikut untuk mengatur `badaso-landy`.

```
php artisan badaso-landy-theme:setup
composer dump-autoload
```
7. Jalankan perintah berikut untuk memigrasi semua tabel .

```
php artisan migrate
```
8. Jalankan perintah ini untuk generate seeder.

```
php artisan db:seed --class='Database\Seeders\Badaso\landyTheme\BadasolandyThemeSeeder'
```
or
```
php artisan db:seed
```
9. Tambahkan plugins MIX_BADASO_MODULES pada .env.
```
MIX_BADASO_MODULES=landy-theme
```
10. Tambahkan plugins menu  MIX_BADASO_MENU pada .env. Jika kamu memiliki menu modul lain, tambahkan mereka dengan menyisipkan koma diantara modul (,).
```
MIX_BADASO_MENU=admin,landy-theme
```
11. Masukan variable lain didalam .env file.
```
    - `landy_THEME_PREFIX=landy` Mengatur prefix landy theme.
```
12. Tambahkan Tailwind pada Laravel Mix configuration.Di dalam  `webpack.mix.js` file.
```
 mix.js("vendor/badaso/landy-theme/src/resources/js/app.js", "public/js/landy-theme.js")
        .js("vendor/badaso/landy-theme/src/resources/js/index/landy-theme.js", "public/js/index/landy-theme.js")
        .css('vendor/badaso/landy-theme/src/resources/app/assets/css/style.css', 'public/css/landy-theme.css',{}, [require('tailwindcss')('./tailwind-landy.config.js'),
        require("autoprefixer"),])
```
13. Mulai proses pembuatan Anda. Jalankan proses pembuatan Anda dengan `npm run watch`.
```
npm run watch
```


