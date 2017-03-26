<?php

class DataSeeder
{
    public function __construct()
    {
        $this->seedData();
    }

    private function seedData()
    {
        $this->seedProducts();
    }

    private function seedProducts()
    {
        $product = new Product();
        $product->product_name = "iPhone Charger";
        $product->product_description = "May make iPhone explode on use";
        $product->product_review = 1;
        $product->product_price = 1.5;
        $product->save();

        $product = new Product();
        $product->product_name = "Earphones";
        $product->product_description = "Make your ears bleed for \$3! Who needs blood anyway?";
        $product->product_review = 5;
        $product->product_price = 3;
        $product->save();

        $product = new Product();
        $product->product_name = "Usb Mouse";
        $product->product_description = "Down is now up! Makes for good use when using laptop upside down. Originally marketed at astronauts now offered to you. ";
        $product->product_review = 3;
        $product->product_price = 10;
        $product->save();

        $product = new Product();
        $product->product_name = "Lazer pen";
        $product->product_description = "Drive your neighbours dog mad!";
        $product->product_review = 2;
        $product->product_price = 20;
        $product->save();

        $product = new Product();
        $product->product_name = "Calculator";
        $product->product_description = "Divide key not included to resolve divide by zero issue on traditional calculators.";
        $product->product_review = 0;
        $product->product_price = 30;
        $product->save();
    }

}
