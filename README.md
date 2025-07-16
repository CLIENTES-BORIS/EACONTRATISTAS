## DEV

1. clonar repositorio
2. run `composer install`
3. copy .env.example .env
4. php artisan key:generate
5. run `npm install`
6. run `npm run build`
7. run `php artisan serve`
8. run `npm run dev`



## LEVANTAR DOCKER
1. RUN composer require laravel/sail --dev
2. RUN php artisan sail:install
3. Instalar WSL
4. wsl ./vendor/bin/sail up -d

## BAJAR DOCKER
1. wsl ./vendor/bin/sail down 
