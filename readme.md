# Vue Laravel Practice

This repository is vuejs practice for laravel.

## Environment with docker
1. Install docker if you don't have already install it.
2. Run `docker-compose up` in project root.
3. Run `docker exec -it vue_demo_php bash` to enter the container.
4. Run `composer install --no-scripts` to install laravel dependancy.
5. Run `npm install` to install javascript dependancy.
6. Run `php artisan serve --host=0.0.0.0` to enable php server.