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

> 📌 Projeto voltado para **aprendizado e portfólio**, ideal para demonstrar base sólida para uma vaga **Júnior**.

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
app/
├── Http/Controllers
├── Models
resources/
├── views
│ ├── layouts
│ ├── usuarios
│ └── auth
routes/
├── web.php
└── auth.php
database/
├── migrations

---
## ▶️ Como executar o projeto localmente

1️⃣ Clonar o repositório

git clone https://github.com/LeMS2/laravel-zero.git

cd laravel-zero

2️⃣ Instalar dependências
composer install

npm install

3️⃣ Configurar ambiente
copy .env.example .env

php artisan key:generate

🎲 Configure o banco de dados no arquivo .env:

DB_DATABASE=laravel_zero

DB_USERNAME=root

DB_PASSWORD=

4️⃣ Rodar as migrations
php artisan migrate

5️⃣ Executar o sistema
  - Usando Laragon (recomendado)
  - Inicie Apache e MySQL no Laragon
  - Acesse no navegador: http://laravel-zero.test
    
🔹 Usando o servidor do Laravel
  - php artisan serve
  - Acesse: http://127.0.0.1:8000
    
⚠️ npm run dev é necessário apenas se estiver usando Vite (assets do Breeze).

--- 
⚠️ Observações importantes

🔐 O arquivo .env não é versionado por segurança 

🔢 IDs do banco podem “pular” (comportamento normal do MySQL)

📚 Projeto desenvolvido com foco em aprendizado contínuo

----

🎯 Objetivo profissional
Este projeto faz parte do meu processo de aprendizado em Laravel e serve como portfólio prático, demonstrando capacidade de:
 - compreender sistemas reais
 - aprender novas tecnologias
 - resolver problemas de ambiente
 - evoluir tecnicamente de forma consistente

---- 

📌 Próximos passos (roadmap)
 - Relacionar usuários logados aos cadastros
 - Implementar permissões
 - Adicionar testes automatizados
 - Melhorar UI/UX
 - Preparar deploy

----
   
💙 Desenvolvido por
       Letícia Marques, 
       Estudante / Desenvolvedora em formação 🚀
