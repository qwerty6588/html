<?php

namespace Class\Database;

use Exception;
use PDO;
use PDOException;

class Database
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "world";
    private int $port = 3306; // mysql mariadb
    private string $charset = "utf8mb4";


    /**
     * connection to database
     * @return PDO|null
     */
    public function connection(): ?PDO
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } catch (Exception $exception) {
            echo "Exception connection failed: " . $exception->getMessage();
        }
        return null;
    }


    /**
     * Select
     * @param string $query
     * @return bool|array
     */
    public function select(string $query): bool|array
    {
        $conn = $this->connection();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function insert(){}

    public function update(){}

    public function delete(){}
}