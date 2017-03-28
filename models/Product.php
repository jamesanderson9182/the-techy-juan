<?php
include_once("Model.php");

class Product extends Model
{
    public $product_id;
    public $product_name;
    public $product_description;
    public $product_price;
    public $product_review;

    public static function All()
    {
        $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
        $products = $db->query("SELECT * FROM product_list", PDO::FETCH_OBJ)->fetchAll(PDO::FETCH_CLASS, 'Product');

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
            if ($i <= $this->product_review)
                $html .= '<i class="fa fa-star" aria-hidden="true"></i>';
            else
                $html .= '<i class="fa fa-star-o" aria-hidden="true"></i>';
        }

        return $html;
    }

    public function __construct($id = null)
    {
        $this->tableName = 'product_list';
        $this->uniqueIdentifierColumnName = 'product_id';
        return parent::__construct($id);
    }

    public function save()
    {
        $sql = <<<SQL
UPDATE {$this->tableName} SET 
                          product_name = '{$this->product_name}',
                          product_description= '{$this->product_description}',
                          product_price = {$this->product_price},
                          product_review = {$this->product_review}
                  WHERE product_id = {$this->product_id};
SQL;

        // We reassign the $sql variable only if there is a new record
        if ($this->isNewRecord) {
            $sql = <<<SQL
INSERT INTO {$this->tableName} (product_name,product_description,product_price,product_review) 
VALUES ("{$this->product_name}","{$this->product_description}","{$this->product_price}","{$this->product_review}");
SQL;
            $this->isNewRecord = false;
        }

        return $this->db->exec($sql);
    }

    public  static  function createTable() 
    {
        // create table
    }
}
