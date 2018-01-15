# Curso Laravel
Este repositório contém conteúdo do curso de Laravel disponibilizados pela [Treinaweb](https://www.treinaweb.com.br)

# Instalando projeto
1 - Instalar o composer
Navegar até a pasta do projeto e executar via terminal o comando de instalação:
```
> composer install

```

# Banco de Dados
1 - Configurações
Para configurar o database do projeto basta configurar o arquivo .env.example na pasta raíz do projeto. Faça a configuração necessária e renomeie o arquivo removendo o .example.

# Migrations
1 - Criar a tabela migrations no banco de dados:
```
> php artisan migrate:install

```

2 - Executar update nas tabelas:
```
> php artisan migrate

```

3 - Popular tabela para testes:
```
> php artisan db:seed

```

