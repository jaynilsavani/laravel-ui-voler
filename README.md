Laravel UI Voler
======

[![Total Downloads](https://poser.pugx.org/jaynilsavani/laravel-ui-voler/downloads)](//packagist.org/packages/jaynilsavani/laravel-ui-voler) [![License](https://poser.pugx.org/jaynilsavani/laravel-ui-voler/license)](//packagist.org/packages/jaynilsavani/laravel-ui-voler)

Laravel UI Frontend Preset for Voler with Laravel Fortify support.

Installation
-----

Run a command for Laravel version 8,

```
composer require jaynilsavani/laravel-ui-voler:1.1.0
```

Run a command for Laravel version 7,

```
composer require jaynilsavani/laravel-ui-voler:dev-master
```

Run a command for Laravel version 6,

```
composer require jaynilsavani/laravel-ui-voler:1.0.0
```

Usage
-----
Run a command,

To Generate a full authentication UI,

``
php artisan ui voler --auth
``

To Install just Voler theme assets,

``
php artisan ui voler
``

And then run,

``
npm install && npm run dev
``

Usage with Laravel Fortify (Laravel 8.x only)
----

This package also provides support for Laravel Fortify for authentication scaffolding.

Perform required steps to install [Laravel Fortify](https://laravel.com/docs/8.x/fortify).

Run a command,

``
php artisan ui voler-fortify --auth
``

And then run,

``
npm install && npm run dev
``

Or for production,

``
npm install && npm run prod
``

Screenshots
----

Login

![alt text](https://github.com/jaynilsavani/laravel-ui-voler/blob/master/screenshots/login.PNG "Login Page")

Register

![alt text](https://github.com/jaynilsavani/laravel-ui-voler/blob/master/screenshots/register.PNG "Register Page")

Reset Password

![alt text](https://github.com/jaynilsavani/laravel-ui-voler/blob/master/screenshots/email.PNG "Reset Page")

Forgot Password

![alt text](https://github.com/jaynilsavani/laravel-ui-voler/blob/master/screenshots/reset-password.PNG "Forgot Password")

Dashboard

![alt text](https://github.com/jaynilsavani/laravel-ui-voler/blob/master/screenshots/home.PNG "Home Page")
