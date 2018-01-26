<?php

namespace app\models;

use fw\core\base\Model;

class Contact extends Model
{
    public function getContacts()
    {
        return $this->findBySql("SELECT * FROM contacts");
    }
}