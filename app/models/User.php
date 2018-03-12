<?php

namespace app\models;

use fw\core\Session;
use fw\core\base\Model;

class User extends Model
{

    public $attributes = [
        'password' => '',
        'email' => '',
        'name' => 'User',
    ];

    public $rules = [
        'required' => [
            ['password'],
            ['email'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['password', 6],
        ]
    ];



    public function registerUser($data)
    {
        return $this->findBySql(" INSERT INTO users (`name`, `email`, `password`) VALUES (?, ?, ?)",[ $data['name'], $data['email'], $data['password'] ]);
    }

    public function getAllUsers()
    {
        return $this->findBySql(" SELECT * FROM users");
    }

    public function userData($data)
    {
        return $this->findBySql(" SELECT * FROM users WHERE email = ? AND password = ? ", [ $data['email'], $data['password'] ]);
    }

    public function editUser($data, $id)
    {
        return $this->findBySql("UPDATE users SET `name` = ?, `email` = ?, password = ? WHERE id = ?", [$data['name'], $data['email'], $data['password'], $id ]);
    }

    public function getOneUser($id)
    {
        return $this->findBySql(" SELECT * FROM users WHERE id = ?", [$id]);
    }

    public function deleteUser($id)
    {
        return $this->findBySql("DELETE FROM users WHERE id = ?", [$id]);
    }

    public function editUserInAdmin($id, $edit_user)
    {
        return $this->findBySql(" UPDATE users SET name = '$edit_user[name]', email = '$edit_user[email]', password = '$edit_user[password]', is_admin = '$edit_user[is_admin]' WHERE id = '$id' ");
    }

    public static function auth($user)
    {
        $_SESSION['user'] = $user;
    }

    public static function isAuth()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        return false;
    }

    public static function logout()
    {
        unset($_SESSION['email']);
        Session::destroy();
        header("location: /");
    }

}