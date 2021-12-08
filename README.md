# Denver

denver is yet another dotEnv manager

## Installation

```console
composer require develhopper/denver
```

## Example

Put a .env file in your project root directory and set your variables

### example:
```
DB_HOST=127.0.0.1
DB_USER=username
DB_PASSWORD=password
```

### and setup denver: 

```php
<?php
    use Denver\Env;
	$config = [
		"KEY" => "value"
	];

    ENV::setup('path to .env file');

	// load variables from an array
	ENV::fromArray($config);

	ENV::put("KEY","value");
?>
```

Done

## Get variable

```php
<?php
    $db_host = getenv("DB_HOST");
	$db_user = $_ENV["DB_USER"]
	$db_password = Env::get("DB_PASSWORD","default_password")
?>
```
