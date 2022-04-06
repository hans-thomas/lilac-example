# Lilac dummy project
[![Laravel](https://github.com/Memareno/backend-web/actions/workflows/laravel.yml/badge.svg)](https://github.com/Memareno/backend-web/actions/workflows/laravel.yml)

# Content table

- [starting up](#starting-up)
  - [production server profile](#production-server-profile)
  - [dev server profile](#dev-server-profile)
  - [develop profile](#develop-profile)

## starting up

there's several predefined profile for using is the different situation.

##### _Production SERVER_ profile

use on production server.

instructions:

- `docker-compose up -d --build` : starts the services (_--build_ is just for the first time).
- `docker-compose exec app bash` : open a terminal inside of `app` service.
- `chown -R www-data:www-data bootstrap/cache storage lang vault` : change the owner of folders and files to the
  docker's default user.
- `cp .env.server .env` : create a copy from `.env.server` file and named the new file `.env`
- `composer update --no-dev --optimize-autoloader` : install necessary composer dependencies and optimize autoloader
- `php artisan key:generate` : generate a new unique key for laravel that used for encode and decode seasons, cookies
  etc.
- `php artisan migrate` : create tables and seeds the database
- `php artisan storage:link` : create a symbolic link between the `public` and `storage/app/public` folder.
- `exit` : exit from the container bash.

##### _Dev SERVER_ profile

use on dev server.

instructions:

- `docker-compose up -d --build` : starts the services (_--build_ is just for the first time).
- `docker-compose exec app bash` : open a terminal inside of `app` service.
- `chown -R www-data:www-data bootstrap/cache storage lang vault` : change the owner of folders and files to the
  docker's default user.
- `cp .env.server .env` : create a copy from `.env.server` file and named the new file `.env`
- `composer update --no-dev --optimize-autoloader` : install necessary composer dependencies and optimize autoloader
- `php artisan key:generate` : generate a new unique key for laravel that used for encode and decode seasons, cookies
  etc.
- `php artisan migrate:fresh --seed --force` : create tables and seeds the database
- `php artisan storage:link` : create a symbolic link between the `public` and `storage/app/public` folder.
- `exit` : exit from the container bash.

##### _DEVELOP_ profile

this profile recommended for developing.

instructions:

- `docker-compose up -d --build` : starts the services (_--build_ is just for the first time).
- `docker-compose exec app bash` : open a terminal inside of `app` service.
- `chown -R www-data:www-data bootstrap/cache storage lang vault` : change the owner of folders and files to the
  docker's default user.
- `cp .env.develop .env` : create a copy from `.env.develop` file and named the new file `.env`
- `composer update` : install all composer dependencies
- `php artisan key:generate` : generate a new unique key for laravel that used for encode and decode seasons, cookies
  etc.
- `php artisan migrate:fresh --seed ` : create tables and seeds the database
- `php artisan storage:link` : create a symbolic link between the `public` and `storage/app/public` folder.
- `exit` : exit from the container bash.
- open [localhost:8080](http://localhost:8080/)
