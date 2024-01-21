# Como funciona?

## Utilizado
[PHP](https://www.php.net/downloads.php) -> Versão 8.3.1 || 
[Composer](https://getcomposer.org/download/) -> Versão 2.6.6

## 🔥 Introdução

### Endpoint : `http://localhost:8080/tipos-atendimentos.php` METHOD=POST

### Comando para iniciar um servidor php local. Inicie este comando no diretorio principal do projeto
```bash
php -S localhost:8080
```

## Após o clone do projeto, entre no diretório do projeto e rode:

```bash
composer install
composer dump-autoload
```

##

### Copiar o arquivo .env.example para .env

```json
cp .env.example .env
```

##

### Adicionar no arquivo .env as seguintes informações

```json
DB_CONNECTION="pgsql" //driver
DB_HOST="" //host
DB_PORT="" //porta
DB_NAME="" //nome do database
DB_USERNAME="" //usuario
DB_PASSWORD="" //senha

SECRET_TOKEN="" //token para verificação
```

##

## Utilizar o arquivo 'sql' que está na pasta query/query_atendimento.sql e executar no banco de dados

## Fazer requisição para o endpoint mencionado no início com o método POST

## No body precisa passar as informações deste modo:
```json
utilizando "Form URL encoded" na requisição

"token": "o token necessário"
```

##

## Caso o token esteja correto, irá retornar os tipos de atendimento.

## Caso seja inválido o token, irá retornar a seguinte mensagem:
```json
{
	"mensagem": "Usuário não autorizado a executar a API.",
	"status": 403
}
```
