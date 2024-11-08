<?php

namespace Class\Database;

use Exception;
use PDO;
use PDOException;
use PDOStatement;

class Database
{
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "world";
    private int $port = 3306; // mysql mariadb
    private string $charset = "utf8mb4";


    protected string $table;
    protected PDO $conn;
    protected PDOStatement $stmt;
    protected string $query;

    public function __construct()
    {
        $this->conn = $this->connection();
    }


    /**
     * connection to database
     * @return PDO|null
     */
    public function connection(): ?PDO
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully \n";
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } catch (Exception $exception) {
            echo "Exception connection failed: " . $exception->getMessage();
        }
        return null;
    }

    /**
     * @param string $table
     * @param array $columns
     * @return Database
     */
    public function select(string $table, array $columns = []): Database
    {
        $select = empty($columns) ? "*" : implode(", ", $columns);
        $this->query = "SELECT " . $select . " FROM " . $table;
        return $this;
    }

    public function where(array $where = [], array $condition = []): static
    {
        if (empty($where)) {
            return $this;
        }
        if (isset($where[0][0]) && is_array($where[0])){
            foreach ($where as $key => $value) {
                if ($key == 0) {
                    $this->query .= ' WHERE '. implode(' ', $value);
                } else {
                    $this->query .= (empty($condition) ? ' AND ' : ' ' . $condition[$key] . ' ') . implode(' ', $value);
                }
            }
        } else {
            $this->query .= ' WHERE ' . implode(' ', $where);
        }
        return $this;
    }

    public function get()
    {
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $this->stmt->fetchAll();
    }

    public function insert(string $query)
    {
        $conn = $this->connection();
        $conn->exec($query);
    }

    public function update(string $query)
    {
        $conn = $this->connection();
        $conn->exec($query);
    }

    public function delete(string $query)
    {
        $conn = $this->connection();
        $conn->exec($query);
    }
}