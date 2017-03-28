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
        Product::createTable();

        $product = new Product();
        $product->Name = "iPhone Charger";
        $product->Description = "May make iPhone explode on use";
        $product->Rating = 1;
        $product->Price = 1.5;
        $product->save();

        $product = new Product();
        $product->Name = "Earphones";
        $product->Description = "Make your ears bleed for \$3! Who needs blood anyway?";
        $product->Rating = 5;
        $product->Price = 3;
        $product->save();

        $product = new Product();
        $product->Name = "Usb Mouse";
        $product->Description = "Down is now up! Makes for good use when using laptop upside down. Originally marketed at astronauts now offered to you. ";
        $product->Rating = 3;
        $product->Price = 10;
        $product->save();

        $product = new Product();
        $product->Name = "Lazer pen";
        $product->Description = "Drive your neighbours dog mad!";
        $product->Rating = 2;
        $product->Price = 20;
        $product->save();

        $product = new Product();
        $product->Name = "Calculator";
        $product->Description = "Divide key not included to resolve divide by zero issue on traditional calculators.";
        $product->Rating = 0;
        $product->Price = 30;
        $product->save();
    }

}
