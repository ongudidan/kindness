<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=localhost;dbname={$_SERVER['CORE_DB_DATABASE']}",
    'username' => $_SERVER['CORE_DB_USERNAME'],
    'password' => $_SERVER['CORE_DB_USERNAME'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
