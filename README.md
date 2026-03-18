Documentando minha jornada em Laravel

Os comandos abaixos servem para criar um projeto em laravel
composer create-project laravel/laravel new-project (se não tiver criado pasta no htdocs)
composer create-project laravel/laravel . (cria o arquivo dentro da pasta criada)

Necessario habilitar as extensões do Laraval (ativa retirando o ; da frente da extensão, o ; serve para comentat)

extension=bcmath
extension=ctype
extension=curl
extension=dom
extension=fileinfo (crucial para o Laravel 10+)
extension=filter
extension=hash
extension=mbstring
extension=openssl
extension=pcre
extension=pdo
extension=session
extension=tokenizer
extension=xml
extension=zip
extension=gd (para manipulação de imagem) 

subir o servidor do laravel
php artisan serve

comando para gerar o APP_KEY
php artesan key:generate

Criar o arquivo do banco de dados
database/database.sqlite

Comando para criar as models
php artisan make:model Contact -m

Comando para criar as migrations
php artisan migrate

Para limpar o cache
php artisan config:clear
php artisan optimize:clear

Comando para criar um controlador
php artisan make:controller HomeController