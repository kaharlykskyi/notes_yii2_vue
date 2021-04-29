<?php
$config = [];
if(file_exists(__DIR__.'/db.local.php')) {
   $config = require_once __DIR__ . '/db.local.php';
}
return array_merge([
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=',
    'username' => '',
    'password' => '',
    'charset' => 'utf8',
], $config);
