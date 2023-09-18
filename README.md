<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel Framework em PHP

## Índice

- [O que é o Laravel?](#o-que-é-o-laravel)
- [Para que pode ser usado? Front-end ou Back-end?](#para-que-pode-ser-usado-front-end-ou-back-end)
- [É um Framework?](#é-um-framework)
- [Vantagens](#vantagens)
- [Desvantagens](#desvantagens)
- [Características Principais](#características-principais)
- [Servidores Web Disponíveis](#servidores-web-disponíveis)
- [Configurações Necessárias](#configurações-necessárias)
  - [Windows](#windows)
  - [Linux](#linux)
  - [Mac](#mac)
- [Tipo de Licença](#tipo-de-licença)
- [Responsáveis pelo Desenvolvimento](#responsáveis-pelo-desenvolvimento)
- [Conclusões](#conclusões)
- [Configurações e instalação do Laravel](#configurações-e-instalação-do-laravel)
- [Instalação do Composer](#instalaçãodo-composer)
- [Criando um novo projeto](#criando-um-novo-rojeto)
- [Criando o Banco de Dados](#criando-o-banco-de-dados)
- [Estrutura das pastas](#estrutura-das-pastas)
- [Criando o primeiro CRUD](#criando-o-primeiro-crud)

## O que é o Laravel?

O Laravel é um framework de desenvolvimento web escrito em PHP. Ele foi projetado para facilitar tarefas comuns usadas na maioria dos projetos web, como autenticação, roteamento, sessões e caching.

## Para que pode ser usado?

Laravel é usado principalmente para o desenvolvimento back-end, mas graças a recursos como Laravel Mix, ele também pode ajudar na compilação e otimização de recursos front-end.


## Vantagens

1. **Eloquent ORM**: Um sistema de mapeamento objeto-relacional que permite interagir com bancos de dados de forma mais eficiente.
2. **Desenvolvimento Rápido**: Laravel oferece várias ferramentas e bibliotecas prontas para usar, o que acelera o desenvolvimento.

## Desvantagens

1. **Curva de Aprendizado**: Para quem é novo em frameworks PHP ou em programação, pode demorar um pouco para se acostumar.
2. **Desempenho**: Embora seja muito poderoso, o Laravel pode ser mais lento em comparação com PHP puro para algumas aplicações.

## Características Principais

- Eloquent ORM
- Blade Template Engine
- Middleware
- Sistemas de autenticação
- MVC Architecture

## Servidores Web Disponíveis

- Apache
- Nginx

## Configurações Necessárias

- WAMP/XAMPP ou equivalente
- Composer para gerenciamento de dependência
- PHP >= 7.3
- PostgrSQL

## Tipo de Licença

Licença MIT, o que torna bastante flexível para uso em diversos tipos de projetos.

## Responsáveis pelo Desenvolvimento

Iniciado em 2011 por Taylor Otwell, o Laravel tem uma grande comunidade de desenvolvedores contribuindo para o seu crescimento.

## Conclusões

- **Materiais e Documentação**: Há uma grande quantidade de materiais, incluindo documentação, tutoriais e cursos.
  
- **Facilidade de Configuração**: Laravel é bastante fácil de configurar, especialmente com ferramentas como Laravel Homestead que fornecem um ambiente de desenvolvimento Vagrant.

- **Comunidade**: Uma das maiores vantagens do Laravel é sua comunidade ativa e crescente, o que torna fácil encontrar soluções para problemas que possam surgir.

Em resumo, o Laravel é uma escolha sólida para o desenvolvimento web em PHP, oferecendo uma ampla gama de funcionalidades que aceleram o desenvolvimento e melhoram a qualidade do código.


# Configurações e Instalação do Laravel

## Índice

- [Configurações Básicas](#configurações-básicas)
  - [Windows](#windows)
  - [Linux](#linux)
  - [macOS](#macos)
- [Instalando PHP no macOS com chip M1](#instalando-php-no-macos-com-chip-m1)
  - [Usando Homebrew](#usando-homebrew)

## Configurações Básicas

### Windows:

1. **PHP**: Versão 7.3 ou superior.
2. **Servidor Web**: WAMP, XAMPP ou similar.
3. **Composer**: Gerenciador de pacotes para PHP.
4. **MySQL**: Para o banco de dados (Opcional, mas comumente usado).
5. **Editor de Código**: VS Code, Sublime Text, ou outro de sua escolha.

#### Passos básicos:

1. Instale o WAMP/XAMPP.
2. Instale o Composer.
3. Utilize o Composer para instalar o Laravel.
4. Abra o terminal e navegue até o diretório onde você deseja instalar um novo projeto Laravel, e rode `composer create-project --prefer-dist laravel/laravel nome_do_projeto`.

### Linux:

1. **PHP**: Versão 7.3 ou superior.
2. **Servidor Web**: LAMP stack (Linux, Apache, MySQL, PHP) ou LEMP stack (Linux, Nginx, MySQL, PHP).
3. **Composer**: Gerenciador de pacotes para PHP.
4. **MySQL**: Para o banco de dados (Opcional, mas comumente usado).
5. **Editor de Código**: VS Code, Sublime Text, ou outro de sua escolha.

#### Passos básicos:

1. Instale o LAMP ou LEMP stack.
2. Instale o Composer.
3. Utilize o Composer para instalar o Laravel.
4. Abra o terminal e navegue até o diretório onde você deseja instalar um novo projeto Laravel, e rode `composer create-project --prefer-dist laravel/laravel nome_do_projeto`.

### macOS:

1. **PHP**: Versão 7.3 ou superior.
2. **Servidor Web**: MAMP ou solução similar.
3. **Composer**: Gerenciador de pacotes para PHP.
4. **MySQL**: Para o banco de dados (Opcional, mas comumente usado).
5. **Editor de Código**: VS Code, Sublime Text, ou outro de sua escolha.

#### Passos básicos:

1. Instale o MAMP.
2. Instale o Composer.
3. Utilize o Composer para instalar o Laravel.
4. Abra o terminal e navegue até o diretório onde você deseja instalar um novo projeto Laravel, e rode `composer create-project --prefer-dist laravel/laravel nome_do_projeto`.

## Instalando PHP no macOS com chip M1

### Usando Homebrew

O Homebrew é um gerenciador de pacotes muito popular para macOS que pode simplificar a instalação do PHP.

1. **Instale o Homebrew se ainda não tiver feito isso:**
    ```bash
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
    ```

2. **Adicione o repositório Homebrew PHP (opcional):**
    ```bash
    brew tap shivammathur/php
    ```

3. **Instale o PHP:**
    ```bash
    brew install php
    ```

4. **Verifique a instalação:**
    ```bash
    php -v
    ```


# Instalação do Composer

O Composer é um gerenciador de dependências para PHP que permite que você gerencie suas bibliotecas e pacotes facilmente. Este documento fornece instruções sobre como instalar o Composer em diferentes sistemas operacionais.

## Linux e macOS

### 1. Baixe o instalador

O primeiro passo é baixar o instalador do Composer, que é um script em PHP. Para isso, abra seu terminal e execute o seguinte comando:

```bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

### 2. Instale o Composer

Para instalar o Composer globalmente em seu sistema, execute o seguinte comando:

```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

Agora você deve poder executar `composer` de qualquer lugar em seu sistema.

### 3. Verifique a instalação:

Abra um novo prompt de comando e execute:
```bash
composer --version
```

# Criando um novo projeto

Para criar um novo projeto, execute o seguinte comando:

```bash
composer create-project --prefer-dist laravel/laravel nome_do_projeto
```

Em seguida vá até o projeto:

```bash
cd nome_do_projeto
```

Rode o projeto:

```bash
php artisan serve
```

Agora vá para: **http://localhost:8000** ou **http://127.0.0.1:8000**.


# Criando o Banco de Dados

No terminal, execute o comando para acessar o prompt do PostgreSQL:

```bash
psql postgres
```

Em seguida crie uma nova database

```bash
CREATE DATABASE nome_da_database;
```

Depois execute o seguinte comando para sair do prompt

```bash
\q
```

Dentro do projeto, encontre o arquivo *.env* e adicione a ele o seguinte

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_da_database
DB_USERNAME=postgres_user
DB_PASSWORD=postgres_password
```

Agora execute o seguinte comando para rodar as migrations

```bash
php artisan migrate
```

# Estrutura das pastas

Os models podem ser acessados dentro da pasta app/Models.
Os controllers podem ser acessados dentro da pasta app/Http/Controllers.
As migrations podem ser acessadas dentro da pasta database/migrations.
As rotas podem ser acessadas dentro de routes/api.php.


# Criando o primeiro CRUD

Por padrão o Laravel já cria um model User. Com isso rodando as migrations já vai criar uma tabela no banco chamada *users*.
Com isso, podemos dar sequência e criar um controller.

### Criando um controller

Como vamos criar o controller do model User, execute o seguinte comando:

```bash
php artisan make:controller UserController --resource
```

O código do UserController pode ser acessado dentro de app/Http/Controllers/UserController.php

### Adicionando as rotas

Para adicionar as rotas, é preciso acessar o arquivo routes/api.php


### Endpoints

Index:

```
http://localhost:8000/api/users
```

Response:

```json
[
    {
        "id": 3,
        "name": "Nome",
        "email": "keslley@gmail.com",
        "email_verified_at": null,
        "created_at": "2023-09-18T22:30:12.000000Z",
        "updated_at": "2023-09-18T22:30:12.000000Z"
    },
    {
        "id": 4,
        "name": "Outro",
        "email": "user@gmail.com",
        "email_verified_at": null,
        "created_at": "2023-09-18T22:30:24.000000Z",
        "updated_at": "2023-09-18T22:30:24.000000Z"
    }
]
```

Show:
```
http://localhost:8000/api/users/:id
```

Response:

```json
{
    "id": 3,
    "name": "Nome",
    "email": "keslley@gmail.com",
    "email_verified_at": null,
    "created_at": "2023-09-18T22:30:12.000000Z",
    "updated_at": "2023-09-18T22:30:12.000000Z"
}
```

Create:

```
http://localhost:8000/api/users
```

Body:

```json
{
    "name": "Nome",
    "email": "keslley@gmail.com",
    "password": "12345678"
}
```

Response:

```json
{
    "message": "Usuário criado com sucesso"
}
```

Update:

```
http://localhost:8000/api/users/:id
```


Body:

```json
{
    "name": "Nome",
    "email": "keslley@gmail.com",
    "password": "12345678"
}
```

Response:

```json
{
    "message": "Usuário atualizado com sucesso"
}
```

Delete:
```
http://localhost:8000/api/users/:id
```

Response:

```json
{
    "message": "Usuário removido com sucesso"
}
```
