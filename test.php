<?php
require 'DotEnv.php';
use test\DotEnv;
echo __DIR__ . '/.env';
(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('LOOP');
// dev
echo getenv('TEST');
// mysql:host=localhost;dbname=test;