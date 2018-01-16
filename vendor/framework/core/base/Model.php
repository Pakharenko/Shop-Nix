<?php
namespace vendor\framework\core\base;

use vendor\framework\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $prkey= 'id';
    public function __construct()
    {
        $this->pdo = Db::instatnce();
    }
    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }
    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }
    public function findOne($id, $field = '')
    {
        $field = $field ? : $this->prkey;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }
    public function findBySql($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }
    public function findLike($str, $field, $table = '')
    {
        $table = $table ? : $this->table;
        $sql = "SELECT * FROM $table WHERE $field LIKE ?";
        return $this->pdo->query($sql, ['%'. $str .'%']);
    }
}