<?php

namespace Project\Models;

use Core\Model;

class Test extends Model
{
    public function getById($id):array
    {
        return $this->findOne("SELECT * FROM page WHERE id=$id");
    }

    public function getAll():array
    {
        return $this->findMany("SELECT * FROM page");
    }
}