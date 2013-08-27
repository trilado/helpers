# UILoader #

A classe `UILoader` contém métodos para carregar automaticamente os arquivos CSS e JS.

## Dependências ##

- Classe `Html` (inclusa no Trilado)
- Classe `Cache` (inclusa no Trilado)

## Exemplos ##

Um exemplo de utilização do métodos `UILoader::css()` e `UILoader::js()`:

```html
<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
		<?= UILoader::css(array('bootstrap.css', 'bootstrap.css')) ?>
	</head>
	<body>
		<h1>Hello, world!</h1>
		<?= UILoader::js(array('jquery.css', 'bootstrap.js')) ?>
	</body>
</html>
```