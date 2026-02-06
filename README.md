# 🚀 Laravel Zero

> Projeto de estudo em **Laravel** focado em fundamentos reais de desenvolvimento web,  
> com **CRUD completo, autenticação, MVC e boas práticas**, desenvolvido passo a passo.

![Laravel](https://img.shields.io/badge/Laravel-red?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8+-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-blue?logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-Em%20desenvolvimento-yellow)

---

## ✨ Sobre o projeto

O **Laravel Zero** é um projeto criado com o objetivo de **consolidar os fundamentos do Laravel na prática**, simulando um sistema real de cadastro de usuários.

Ele foi desenvolvido com foco em:
- entender o **fluxo completo** de uma aplicação Laravel
- aplicar o padrão **MVC**
- trabalhar com **banco de dados**
- implementar **autenticação e controle de acesso**
- versionar corretamente com **Git e GitHub**

📌 Projeto voltado para **aprendizado e portfólio**.

---

## 🔐 Funcionalidades

- ✅ Login, registro e logout de usuários
- 🔒 Proteção de rotas com `middleware auth`
- 👤 CRUD completo de usuários:
  - Criar
  - Listar
  - Editar
  - Excluir
- 📝 Validação de formulários no backend
- 🕒 Datas automáticas (`created_at` e `updated_at`)
- 🎨 Layout customizado com Blade + CSS
- 📦 Versionamento com Git e GitHub

---

## 📸 Screenshots

### 📋 Lista de usuários
![Lista de usuários](./screenshots/usuarios.png)

### ➕ Cadastro de usuário
![Cadastro de usuário](./screenshots/cadastrar.png)

---

## 🧠 Conceitos aplicados

- MVC (Model, View, Controller)
- Rotas REST (GET, POST, PUT, DELETE)
- Eloquent ORM
- Blade Templates
- Migrations
- Middleware
- Sessão e autenticação
- Boas práticas de organização
- Git (commit, push, versionamento)

---

## 🛠️ Tecnologias utilizadas

- PHP 8+
- Laravel
- MySQL
- Laravel Breeze (Blade + Alpine)
- HTML5 + CSS3
- Git e GitHub
- Laragon (ambiente local)

---

## 📂 Estrutura do projeto

```txt
app/
 ├── Http/Controllers
 └── Models

resources/
 └── views
     ├── layouts
     ├── usuarios
     └── auth

routes/
 ├── web.php
 └── auth.php

database/
 └── migrations
