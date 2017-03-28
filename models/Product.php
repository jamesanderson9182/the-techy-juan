<?php
include_once("Model.php");

class Product extends Model
{
    public $ProductID;
    public $Name;
    public $Description;
    public $Price;
    public $Rating;

    public static function All()
    {
        $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
        $products = $db->query("SELECT * FROM Product", PDO::FETCH_OBJ)->fetchAll(PDO::FETCH_CLASS, 'Product');

        $productCollection = array();
        foreach ($products as $product) {
            $productCollection[] = $product;
        }

        return $productCollection;
    }

    /**
     * @return string Formatted Stars
     */
    public function getStars()
    {
        $html = '';
        for ($i = 0; $i < 5; $i++) {
            if ($i <= $this->Rating)
                $html .= '<i class="fa fa-star" aria-hidden="true"></i>';
            else
                $html .= '<i class="fa fa-star-o" aria-hidden="true"></i>';
        }

        return $html;
    }

    public function getPrice()
    {
        return "$" . number_format($this->Price, 2);
    }

    public function __construct($id = null)
    {
        $this->tableName = 'Product';
        $this->uniqueIdentifierColumnName = 'ProductID';
        return parent::__construct($id);
    }

    public function save()
    {
        $sql = <<<SQL
UPDATE {$this->tableName} SET 
    name = '{$this->Name}',
    description= '{$this->Description}',
    price = {$this->Price},
    rating = {$this->Rating}
WHERE productID = {$this->ProductID};
SQL;

        // We reassign the $sql variable only if there is a new record
        if ($this->isNewRecord) {
            $sql = <<<SQL
INSERT INTO {$this->tableName} 
(Name,Description,Price,Rating) 
VALUES ("{$this->Name}","{$this->Description}","{$this->Price}","{$this->Rating}");
SQL;
            $this->isNewRecord = false;
        }

        return $this->db->exec($sql);
    }

    public static function createTable()
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `Product` (
  `ProductID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) DEFAULT NULL,
  `Description` VARCHAR(3000) DEFAULT NULL,
  `Price` FLOAT DEFAULT NULL,
  `Rating` INT(11) DEFAULT NULL,
  `Image` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SQL;
        $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
        $db->exec($sql);
    }
}
