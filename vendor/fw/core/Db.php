<?php
namespace fw\core;

class Db
{
    protected $pdo;
    protected static $instance;
    protected function __construct()
    {
        $db = require ROOT . '/config/config_db.php'; //подключение к базе данных
        $options = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);
    }
    public static function instatnce()
    {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function execute($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }
    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($params);
        if($res !== false) {
            return $stmt->fetchAll();
        }
        return [];
    }
}