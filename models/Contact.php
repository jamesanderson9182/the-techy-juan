<?php

include_once("Model.php");

class Contact extends Model{

	public function __construct($id = null){
		$this->tableName = "contact_us";
        $this->uniqueIdentifierColumnName = 'id_contact_us';
        return parent::__construct($id);
	}

	public function save(){
		$sql = <<<SQL
UPDATE {$this->tableName} SET 
                          contact_name = '{$this->contact_name}',
                          contact_mail= '{$this->contact_mail}',
                          contact_content = '{$this->contact_content}'
                  WHERE id_contact_us = {$this->id_contact_us};
SQL;

        // We reassign the $sql variable only if there is a new record
        if ($this->isNewRecord) {
            $sql = <<<SQL
INSERT INTO {$this->tableName} (contact_name, contact_mail, contact_content) 
VALUES ("{$this->contact_name}","{$this->contact_mail}","{$this->contact_content}");
SQL;
            $this->isNewRecord = false;
        }

        return $this->db->exec($sql);
    
	}

	public static function All()
	{
		 $db = new PDO('mysql:host=localhost;dbname=the-techy-juan;charset=utf8mb4', 'root', '');
        $contacts = $db->query("SELECT * FROM contact_us", PDO::FETCH_OBJ)->fetchAll(PDO::FETCH_CLASS, 'Contact');

        $contactCollection = array();
        foreach ($contacts as $contact) {
            $contactCollection[] = $contact;
        }

        return $contactCollection;
	}

	public static function createTable()
	{
		// Create table 
	}

}
