<?php
include_once(__DIR__ . '/../utils/logging.php');

class Database
{
    private static $instance    = null;
    private $servername = "";
    private $username = "";
    private $password = "";
    private $conn = null;

    function __construct($servername, $username, $password)
    {

        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->conn = new mysqli($servername, $username, $password);

        if ($this->conn->connect_error) {
            die("Connection error: " . $this->conn->connect_error);
        }
    }

    public static function getInstance($servername, $username, $password)
    {
        if (self::$instance === null) {
            self::$instance = new self($servername, $username, $password);
        }

        return self::$instance;
    }

    public function createDatabase($database_name)
    {
        $conn = $this->conn;
        // var_dump($conn);
        // var_dump($database_name);

        // If database is not exist create one
        if (!mysqli_select_db($conn, $database_name)) {
            $sql_sentence = "CREATE DATABASE {$database_name};";

            if ($conn->query($sql_sentence) === TRUE) {
                console_log("Database created successfully");
            } else {
                console_log("Error creating database: " . $conn->error);
            }
        } else {
            console_log("Database already exists");
            $this->useDatabase($database_name);
        }
    }

    public function useDatabase($database_name)
    {
        $conn = $this->conn;
        $sql_sentence = "USE {$database_name};";

        if ($conn->query($sql_sentence) === TRUE) {
            console_log("Database selected successfully");
        } else {
            console_log("Error selecting database: " . $conn->error);
        }
    }

    public function createTable($table_name, $table_contents)
    {
        $conn = $this->conn;
        $sql_sentence = "CREATE TABLE IF NOT EXISTS {$table_name} ({$table_contents})";

        if ($conn->query($sql_sentence) === TRUE) {
            console_log("Table created.");
        } else {
            console_log("Table creation error: " . $conn->error);
        }
    }

    public function insertRecord($table_name, $columns, $values)
    {
        $conn = $this->conn;
        $sql = "INSERT INTO {$table_name} ({$columns})
VALUES ('{$values}')";

        if ($conn->query($sql) === TRUE) {
            console_log("Record created.");
        } else {
            console_log("Record creation error: " . $conn->error);
        }
    }

    public function getRecord($table_name, $columns, $values)
    {
        $conn = $this->conn;
        $sql = "SELECT * FROM {$table_name} WHERE {$columns} = '{$values}'";
        $query_result = $conn->query($sql);
        return $query_result;
    }

    public function getRecords($table_name)
    {
        $conn = $this->conn;
        $sql = "SELECT * FROM {$table_name}";
        $query_result = $conn->query($sql);
        return $query_result;
    }
}
