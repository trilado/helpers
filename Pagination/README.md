# Pagination #

A classe `Pagination` foi criada com o intuito de facilitar na hora de criar paginação de dados. Além da classe `Pagination`, o helper vem acompanhado de uma view `_snippet/pagination.php`, que contém o HTML seguindo o padrão Twitter Bootstrap.

## Dependências ##

O arquivo `_snippet/pagination.php` segue o modelo de paginação do Twitter Bootstrap, porém isso não é uma regra. O HTML pode ser modificado de acordo com estilo adotado da aplicação.

## Instalação ##

Após realizar o download, copie o arquivo `Pagination.php` para `app/helpers/Pagination.php`. Posteriormente copie o arquivo `_snippet/pagination.php` para `app/views/_snippet/pagination.php`.

## Exemplos ##

O arquivo controller, que irá buscar os dados paginados.

```php
<?php 
class UserController extends Controller 
{
	public function index($p = 1)
	{
		$users = User::all($p, 20, 'Id');

		return $this->_view($users);
	}
}
```
A view, que irá apresentar a paginação.

```php
<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
	</head>
	<body>
		...
		<?= Pagination::create('user/index/', $model->Count, $p, 20) ?>
	</body>
</html>
```