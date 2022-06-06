# Elektronicko api

### Pokretanje u docker-u

- `docker-compose up -d`
- `docker-compose exec app cp .env.example_docker .env`
- `docker-compose exec app composer install`
- `docker-compose exec app php artisan key:generate`
- `docker-compose exec app php artisan migrate:fresh --seed`
- `docker-compose exec app php artisan storage:link`
