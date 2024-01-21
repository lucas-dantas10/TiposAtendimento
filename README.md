# Como funciona?

## 🔥 Introdução

### Endpoint : `http://localhost:8080/tipos-atendimentos.php` METHOD=POST

### Comando para iniciar um servidor php local
```json
php -S localhost:8080
```

##

### Mudar nome do arquivo .env.example para .env

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
