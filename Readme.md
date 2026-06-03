/Instalação\

1 - docker-compose exec app composer install

2 - docker-compose exec app php artisan key:generate

3 - docker-compose exec app php artisan migrate

Acesso: http://localhost:15000/disciplina
        http://localhost:15000/curso

