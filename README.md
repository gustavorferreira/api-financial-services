<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sistema de controle financeiro via API

Pré requisitos para executar o projeto:

- Servidor Web
- PHP >= 7.2.0, com as seguintes extensões:
  - BCMath PHP
  - Ctype PHP
  - JSON PHP
  - Mbstring PHP
  - OpenSSL PHP
  - PDO PHP
  - PGSQL PHP
  - Tokenizer PHP
  - XML PHP
- Composer
- Postgres >= 12

## Popular o banco de dados via terminal

- php artisan migrate &&
- php artisan db:seed --class=RegistrationOriginSeeder &&
- php artisan db:seed --class=StatusSeeder &&
- php artisan db:seed --class=RevenueTypeSeeder &&
- php artisan db:seed --class=ExpenseTypeSeeder &&
- php artisan db:seed --class=PeopleSeeder &&
- php artisan db:seed --class=PaymentSeeder &&
- php artisan db:seed --class=UserSeeder &&
- php artisan db:seed --class=RevenueSeeder &&
- php artisan db:seed --class=ExpenseSeeder

## Executar projeto via terminal 

- php artisan serve
  - http://127.0.0.1:8000

## Verificar as rotas da API

- php artisan route:list 
