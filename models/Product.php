<?php
include "Model.php";

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
        $products = $db->query("SELECT product_id FROM product_list", PDO::FETCH_OBJ)->fetchAll();

        $productCollection = array();
        foreach ($products as $product) {
            $productCollection[] = new Product($product->product_id);
        }

        return $productCollection;
    }

    public function getStars()
    {
        $rating = $this->product_review;

        if ($rating < 1) {
            return <<<HTML
<i class="fa fa-star-o" aria-hidden="true"></i>
HTML;

        }
        $html = "";
        for ($i = 0; $i < $rating; $i++) {
            $html .= '<i class="fa fa-star" aria-hidden="true"></i>';
        }

        return $html;
    }

    public function __construct($id = null)
    {
        parent::__construct();
        if ($id != null) {
            $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
            $product = $db->query("select * from product_list where product_id = " . $id, PDO::FETCH_OBJ)->fetch();

            $this->product_id = $product->product_id;
            $this->product_name = $product->product_name;
            $this->product_description = $product->product_description;
            $this->product_price = $product->product_price;
            $this->product_review = $product->product_review;

            return $product;
        }
        $this->isNewRecord = true;
        return $this;
    }

    public function Save()
    {
        if ($this->isNewRecord) {
            $sql = <<<SQL
INSERT INTO product_list (product_name,product_description,product_price,product_review) 
VALUES ("{$this->product_name}","{$this->product_description}","{$this->product_price}","{$this->product_review}");
SQL;
            return $this->db->exec($sql);
        }

        $sql = "UPDATE product_list SET 
                          product_name = '" . addslashes($this->product_name) . "',
                          product_description= '" . addslashes($this->product_description) . "',
                          product_price= " . $this->product_price . ",
                          product_review = " . $this->product_review . "
                  WHERE product_id = " . $this->product_id;

        return $this->db->exec($sql);
    }
}
