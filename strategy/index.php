<?php

require __DIR__ . '/../vendor/autoload.php';


$config = new \Strategy\App\Config\Config(
    new \Strategy\App\Config\Parser\ArrayParser
);

$config->load('config/database.php');

var_dump($config->get('mysql.host'));


$config->setParser(
    new \Strategy\App\Config\Parser\JsonParser()
);

$config->load('config/database.json');

var_dump($config->get('mysql.host'));
