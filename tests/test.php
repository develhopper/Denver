<?php
include __DIR__."/../vendor/autoload.php";

use Denver\Env;

Env::setup(__DIR__.'/.env');


echo getenv('ENV_HASH');
echo "\n\r";
echo getenv('DB_HOST');
