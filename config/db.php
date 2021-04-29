<?php
$config = [];
if(file_exists(__DIR__.'/db.local.php')) {
   $config = require_once __DIR__ . '/db.local.php';
}
return array_merge([
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=vuejs_yii2_notes',
    'username' => 'root',
    'password' => '1211',
    'charset' => 'utf8',
], $config);
