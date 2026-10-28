# EventHub

Sistema web de gerenciamento de eventos e inscrições, desenvolvido em Laravel como atividade prática do curso Técnico em Desenvolvimento de Sistemas.

## Descrição

O EventHub permite que usuários consultem eventos, se inscrevam e cancelem suas inscrições, enquanto administradores gerenciam categorias, eventos e participantes. As regras de negócio (vagas, duplicidade, eventos cancelados ou iniciados) ficam centralizadas em um Service.

## Tecnologias utilizadas

- PHP e Laravel 13
- SQLite
- Eloquent ORM
- Blade
- Bootstrap 5 (via CDN)
- Form Requests, Middleware e Service
- PHPUnit (testes automatizados)
- Git e GitHub

## Funcionalidades

**Usuário comum**
- Cadastro, login e logout
- Listagem de eventos com pesquisa e filtro por categoria
- Detalhes do evento e vagas disponíveis
- Inscrição, cancelamento e reinscrição
- Tela "Minhas inscrições"

**Administrador**
- CRUD de categorias (não exclui categoria com eventos)
- CRUD de eventos (não edita evento iniciado; não exclui evento com inscrições)
- Cancelamento de eventos
- Consulta de participantes por evento

## Como instalar

```bash
git clone https://github.com/pedru224/gest-o-de-eventos.git
cd gest-o-de-eventos
composer install
cp .env.example .env
php artisan key:generate
```

No Windows (PowerShell), use `copy .env.example .env` no lugar do `cp`.

## Como configurar o banco

O projeto usa SQLite. No `.env`, mantenha:

```
DB_CONNECTION=sqlite
```

Crie as tabelas e os dados iniciais:

```bash
php artisan migrate:fresh --seed
```

O arquivo `database/database.sqlite` não é versionado: ele é recriado pelo comando acima.

## Como executar

```bash
php artisan serve
```

Acesse http://127.0.0.1:8000

## Usuários para demonstração

| Perfil | E-mail | Senha |
|---|---|---|
| Administrador | admin@eventhub.test | password |
| Usuário comum | usuario@eventhub.test | password |

## Como executar os testes

```bash
php artisan test
```

## Screenshots

_Adicione aqui as capturas de tela do sistema (login, lista de eventos, detalhes, minhas inscrições e área administrativa)._
