
# Instituto Shanti 

- Laravel 5.5
- Laravel Generator
- Adminlte
- Yajra DataTables v8
- Languages / locale pt-BR

## Steps para Instalar e rodar

### Clone c/ submodulos (laradock)
- `git clone --recursive https://github.com/grupotesseract/shanti.git`

### Buildar Laradock
- `cd laradock`
- `cp env-example .env` (editar caso seja necessario portas / BD's diferentes)
- `docker-compose up -d nginx php-fpm postgres`
- `docker-compose exec --user=laradock workspace composer install`
- `docker-compose exec --user=laradock workspace php artisan key:generate`

### Setup .env
- `cp .env-example .env`
Acertar .env do projeto de acordo com as configs do laradock

### Front-end packages
- `npm install`
- `npm run dev`

### Migration e seed's
- `docker-compose exec --user=laradock workspace php artisan migrate --seed`

Se pá GGWP :+1:
