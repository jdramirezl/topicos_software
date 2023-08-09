<?php
// Includes
include(__DIR__ . '/models/database.model.php');
include(__DIR__ . '/config/env.config.php');

function startDatabase(Configuration $config): Database
{
    $database =  Database::getInstance(
        $config->get('DB_HOST'),
        $config->get('DB_USERNAME'),
        $config->get('DB_PASSWORD'),
    );

    $database->createDatabase($config->get('DB_NAME'));
    // $database->useDatabase($config->get('DB_NAME'));


    $table_name = 'user';
    $sql_path = __DIR__ . '/database/' . $table_name . '.sql';
    $table_contents = file_get_contents($sql_path);
    $database->createTable($table_name, $table_contents);


    return $database;
}

function main()
{
    $config = new Configuration(__DIR__ . '/../.env');
    $config->loadEnvVariables();
    $database = startDatabase($config);


    // Load the main page
    $title = 'User form and query';

    include(__DIR__ . '/views/index.view.php');
}

main();
