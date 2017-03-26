<?php

abstract class Model
{
    public $isNewRecord = false;
    public $tableName;
    public $uniqueIdentifierColumnName;

    /**
     * @return array
     */
    public static function All(){}

    public function __construct($id = null){
        $this->db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');

        if ($id != null) {
            $record = $this->db->query("SELECT * FROM ". $this->tableName ." WHERE ".$this->uniqueIdentifierColumnName . " = " . $id, PDO::FETCH_ASSOC)->fetch();
            foreach ($record as $propName => $propValue) {
                $this->{$propName} = $propValue;
            }
            return $this;
        }
        $this->isNewRecord = true;
        return $this;
    }

    abstract public function save();
}