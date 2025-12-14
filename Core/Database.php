<?php

namespace Core;

use PDO;

abstract class Database
{

    protected string $table;
    protected array $fill;
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("sqlite:" . base_path('database.sqlite'));
    }

    //

    private function query($sql, $params = [])
    {
        $prepare = $this->pdo->prepare($sql);
        $prepare->execute($params);

        return $prepare;
    }

    //

    public static function update(array $data)
    {
        $object   = new static;
        $censured = ['password'];

        if (!isset($data['id'])) {
            throw new \InvalidArgumentException('ID é obrigatório para update.');
        }

        $id = $data['id'];
        unset($data['id']); 

        foreach ($data as $key => $value) {
            if (!in_array($key, $object->fill)) {
                unset($data[$key]);
                continue;
            }

            if (in_array($key, $censured)) {
                $data[$key] = password_hash($value, PASSWORD_BCRYPT);
            }
        }

        if (empty($data)) {
            return false;
        }

        $columns = array_keys($data);
        $set     = implode(' = ?, ', $columns) . ' = ?';
        $sql     = "UPDATE {$object->table} SET {$set} WHERE id = ?";

        $values  = array_values($data);
        $values[] = $id;

        return $object->query($sql, $values);
    }

    public static function delete($value, $key = 'id')
    {
        $object = new static;
        return $object->query("DELETE FROM $object->table WHERE $key = ?", [$value]);
    }

    public static function insert(array $data)
    {
        $object = new static;
        $censured = ['password'];

        foreach ($data as $key => $value) {
            if (!in_array($key, $object->fill)) {
                unset($data[$key]);
            }

            if (in_array($key, $censured)) {
                $data[$key] = password_hash($value, PASSWORD_BCRYPT);
            }
        }

        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        return $object->query("INSERT INTO $object->table ($columns) VALUES ($values)", array_values($data));
    }

    public static function all()
    {
        $object = new static;
        return $object->query("SELECT * FROM {$object->table}")->fetchAll(PDO::FETCH_OBJ);
    }

    public static function get($value, $key)
    {
        $object = new static;

        return $object->query(
            sql: "SELECT * FROM $object->table WHERE $key = ?",
            params: [$value]
        )->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($value, $key = 'id')
    {
        $object = new static;

        return $object->query(
            sql: "SELECT * FROM $object->table WHERE $key = ? LIMIT 1",
            params: [$value]
        )->fetch(PDO::FETCH_OBJ);
    }
}
