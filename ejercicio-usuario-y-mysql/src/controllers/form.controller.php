<?php

include(__DIR__ . '/../utils/sanitize.php');

global $config;
$config = new Configuration(__DIR__ . '/../../.env');
$config->loadEnvVariables();

global $database;
$database = getDatabase();

function getDatabase(): Database
{
    $config = $GLOBALS['config'];
    $database = Database::getInstance(
        $config->get('DB_HOST'),
        $config->get('DB_USERNAME'),
        $config->get('DB_PASSWORD'),
    );

    $database->useDatabase($config->get('DB_NAME'));
    return $database;
}

function insertUsername($input_username)
{
    $database = $GLOBALS['database'];
    $input_username = $_POST['user'];

    $clean_username = sanitizeUsername($input_username);
    $table_name = 'user';
    $columns = 'username';

    $records = $database->getRecord($table_name, $columns, $clean_username);

    if ($records->num_rows > 0) {
        echo "User already exists!" . "<br>";
        while ($row = $records->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["username"] . "<br>";
        }
    } else {
        $database->insertRecord($table_name, $columns, $clean_username);
    }
}

function getUsernames()
{
    $config = $GLOBALS['config'];
    $table_name = 'user';

    $database = $GLOBALS['database'];
    $columns = 'username';
    $records = $database->getRecords($table_name, $columns);
    if ($records->num_rows > 0) {
        while ($row = $records->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["username"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}
