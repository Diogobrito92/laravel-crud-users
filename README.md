# 🚀 Sistema CRUD com Laravel

Projeto desenvolvido com Laravel contendo um CRUD completo de usuários com autenticação.

## 🔧 Tecnologias
- PHP
- Laravel
- Bootstrap
- MySQL

## ✨ Funcionalidades
- Cadastro de usuários
- Edição
- Exclusão
- Listagem com busca
- Autenticação (login)

## 🔐 Segurança
- Rotas protegidas com middleware auth

## 📸 Preview
[Página de listar usuários](image-1.png)
[Pagina de editar usuário](image.png)
[Página de cadastro de usuários](image-2.png)

## 🚀 Como rodar o projeto

```bash
git clone https://github.com/seu-usuario/laravel-crud-users.git
cd laravel-crud-users
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve