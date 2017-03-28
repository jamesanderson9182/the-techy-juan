<?php

abstract class Model
{
    public $isNewRecord = false;
    public $tableName;
    public $uniqueIdentifierColumnName;

    /**
     * @return array
     */
    public static function All()
    {
    }

    /**
     * Model constructor.
     *
     * Make sure to call parent::__construct($id); at the bottom of your __construct($id) method
     * @param null $id The optional id of the record you want to return
     * @throws Exception If you do not set tableName and uniqueIdentifierColumnName
     */
    public function __construct($id = null)
    {
        if (!isset($this->tableName)) {
            throw new Exception("You need to set tableName in the constructor");
        }

        if (!isset($this->uniqueIdentifierColumnName)) {
            throw new Exception("You need to set uniqueIdentifierColumnName in the constructor");
        }

        $this->db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');

        if ($id != null) {
            $record = $this->db->query("SELECT * FROM " . $this->tableName . " WHERE " . $this->uniqueIdentifierColumnName . " = " . $id, PDO::FETCH_ASSOC)->fetch();
            foreach ($record as $propName => $propValue) {
                $this->{$propName} = $propValue;
            }
            return $this;
        }
        $this->isNewRecord = true;
        return $this;
    }

    /**
     * You need two paths for saving. One for if this is a new record and one for if you are saving an existing record.
     */
    abstract public function save();

    /**
     * Create table if not exists
     *
     * A good place to put this is in the DataSeeder
     */
    static public function createTable()
    {
        throw new Exception('createTable method not implemented');
    }

}