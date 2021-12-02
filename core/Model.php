<?php

namespace Core;

class Model
{

    protected static ?Model $model = null;
    protected ?\mysqli $conn = null;


    private function __construct()
    {
    }

    public static function getModel():Model
    {
        if (!isset(static::$model)) {
            static::$model = new static();
        }
        return static::$model;
    }

    public function getConnection():void
    {
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }

    protected function findOne($query)
    {
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));

        return mysqli_fetch_assoc($result);
    }

    protected function findMany($query)
    {
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){}

        return $data;
    }
}