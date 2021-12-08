<?php
include __DIR__."/../vendor/autoload.php";

use Denver\Env;
$config_valid = [
	"DB_NAME" => "denver",
	"TEST" => "test"
];

$config_invalid = [
	"invalid","key"
];

Env::setup(__DIR__.'/.env');
Env::put("TEST","TEST");

ENV::fromArray($config_valid);
ENV::fromArray($config_invalid);

var_dump($_ENV);

echo ENV::get("undefined","default");
