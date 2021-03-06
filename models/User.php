<?php

include_once("Model.php");

class User extends Model
{

    public $UserID;
    public $FirstName;
    public $Surname;
    public $DateOfBirth;
    public $Password;
    public $Email;
    public $ProfileImage;

    public function __construct($id = null)
    {
        $this->tableName = 'User';
        $this->uniqueIdentifierColumnName = 'UserID';
        return parent::__construct($id);
    }

    /**
     * @throws Exception if the user already exists
     */
    public function checkDuplicateUser()
    {
        $result = $this->db->query('SELECT * FROM User WHERE Email = ' . $this->Email)->execute();
        if ($result->rowCount() > 0) {
            throw new Exception('User Already Exists');
        }
        /**
         * Uncomment below when we are using $username
         */
        /*
        $result = $this->db->query('SELECT * from User WHERE Username = ' . $this->Username)->execute();
        if($result->rowCount() > 0)
        {
            throw new Exception('User Already Exists');
        }
        */
    }

    public static function All()
    {
        $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
        $Users = $db->query("SELECT * FROM User", PDO::FETCH_OBJ)->fetchAll(PDO::FETCH_CLASS, 'User');

        $UserCollection = array();
        foreach ($Users as $User) {
            $UserCollection[] = $User;
        }

        return $UserCollection;
    }

    /**
     * @return int
     */
    public function save()
    {
        $sql = <<<SQL
UPDATE {$this->tableName} SET 
    UserID = '{$this->UserID}',
    FirstName = '{$this->FirstName}',
    Surname = '{$this->Surname}',
    DateOfBirth = '{$this->DateOfBirth}',
    Password= '{$this->Password}',
    Email= '{$this->Email}',
    ProfileImage= '{$this->ProfileImage}'
WHERE UserID = {$this->UserID};
SQL;

        // We reassign the $sql variable only if there is a new record
        if ($this->isNewRecord) {
            $this->checkDuplicateUser();
            $sql = <<<SQL
INSERT INTO {$this->tableName} 
	(FirstName,Surname,DateOfBirth,Password,Email,ProfileImage) 
VALUES ("{$this->FirstName}","{$this->Surname}","{$this->DateOfBirth}","{$this->Password}","{$this->Email}","{$this->ProfileImage}");
SQL;

            $this->isNewRecord = false;
        }

        return $this->db->exec($sql);
    }

    public static function createTable()
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `User` (
  `UserID` INT(11) NOT NULL AUTO_INCREMENT,
  `FirstName` VARCHAR(255) DEFAULT NULL,
  `Surname` VARCHAR(255) DEFAULT NULL,
  `DateOfBirth` DATE NOT NULL,
  `Password` VARCHAR(255) DEFAULT NULL,
  `Email` VARCHAR(255) DEFAULT NULL,
  `ProfileImage` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
)
SQL;
        $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
        $db->exec($sql);
    }
}
