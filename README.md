# School Curricular Information Management System for Department of Education in Cadiz City

## Installation

### Requirements

* PHP 7.1
* MySQL 5.7 with JSON support or PostgreSQL

> For Mariadb you can use this [laravel-mariadb package](https://packagist.org/packages/ybr-nx/laravel-mariadb).

1. `composer create-project --prefer-dist --stability=dev adr1enbe4udou1n/laravel-boilerplate my-new-project`
2. Set database and environment variables from **.env.example**
3. Set Web write permission if needed to `bootstrap/cache` and `storage` folders.
4. Launch follow commands :

### For Local/Development

```shell
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate [--seed]
```

### For Production

```shell
# Running this on development environment will throw error so run below command only on production
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan storage:link
php artisan migrate --force
```

### Initialize search index for posts

```shell
php artisan scout:import "App\Models\Post"
```

Laravel Scout takes care of updating posts index on Create, Update and Delete (CUD) operations.

## Development notes

### Compiling assets with Webpack

1. Install dependencies with `yarn`
2. Launch `yarn dev` for compiling assets and start dev-server with HMR enabled (preferred way for fast admin building)

> N1 : Use DEV_SERVER_PORT variable to configure local port of Webpack Dev Server,
> N2 : Use DEV_SERVER_URL to configure HTTP access to Webpack Dev Server from your host, especially useful if you work on homestead/docker),
> N3 : Use `yarn watch` if you prefer old school watcher,
> N4 : If assets modified, don't forget to launch `yarn prod` before deploy on production environment.

Laravel Mix still stay awesome for newcomers thanks to Jeffrey Way's laravel-like webpack fluent API, but, even if Laravel Mix can be easily overridden, for this project i preferred use my custom framework-free webpack setup in order to have total control of assets workflow.

For instance, with this custom setup HMR work natively with configurable port (essential for easy vue admin development) and productions assets are bundled into specific "dist" directory.

### Code styling

PHP-CS-Fixer & ESLint are used for strong style guidelines for both server and client side code.

PHP is pre-configured for official Laravel styling, just launch `./vendor/bin/php-cs-fixer fix` for global project auto-formatting.

JS use [Prettier Standard Style](https://github.com/prettier/prettier/) & eslint-loader is used within webpack for dynamic code styling recommendations.
Moreover, [Official ESLint plugin for Vue.js](https://github.com/vuejs/eslint-plugin-vue) is included for heavy consistent code through all components vue files.

## License

This project is open-sourced software licensed under the [MIT license](https://adr1enbe4udou1n.mit-license.org).
