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
    ENV::setup('path to .env file');
?>
```

Done

## Get variable

```php
<?php
    $db_host = getenv("DB_HOST");
?>
```