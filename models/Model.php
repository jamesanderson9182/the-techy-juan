<?php

abstract class Model
{
    public $isNewRecord = false;
    public static function All(){}

    public function __construct($id = null){
        $this->db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
    }

    abstract public function Save();
}