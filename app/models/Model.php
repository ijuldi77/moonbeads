<?php
require_once 'interface/CrudInterface.php';
// require_once '../core/Koneksi.php';
require_once __DIR__ . '/../core/Database.php';


class Model implements CrudInterface
{
    protected $table;
    protected $conn;
    protected $stmt;

    public function __construct()
    {
        $koneksi = new Database();
        $this->conn = $koneksi->getPDO();
    }



    public function insert($data)
    {
        $keys = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        try {
            $query = "INSERT INTO {$this->table} ({$keys}) VALUES ({$values})";
            $stmt = $this->conn->prepare($query);
            foreach ($data as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function edit($data)
    {
        try {
            $updateKolom = '';
            foreach ($data as $key => $value) {
                $updateKolom .= $key . '=:' . $key . ', ';
            }
            $updateKolom = rtrim($updateKolom, ', ');

            $query = "UPDATE {$this->table} SET {$updateKolom} WHERE id = :id";
            $stmt = $this->conn->prepare($query);

            foreach ($data as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $query = "DELETE FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function query($query)
    {
        $this->stmt = $this->conn->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function findById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->query($query);
        $stmt->bindParam(':id', $id);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAll()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($query);
        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
}
?>