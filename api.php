<?php
/**
 * Use this to get a json array of data from a model.
 * You need to include a parameter of model, you can use an optional parameter of id
 * To get a Json Array of all of the products go to http://juan.local:8080/api?model=Product
 * To get an array of an individual product go to http://juan.local:8080/api?model=Product&id=1
 *
 * This would allow you to obtain objects to use in javascript on the client side
 */
include "models/Product.php";
header('Content-Type: application/json');

if (!isset($_GET["model"])) {
    throw new Exception("Incorrect parameters", 400);
}
/** @var Model $model */
$model = ucfirst($_GET["model"]);

if (isset($_GET["id"])) {
    print json_encode(new $model($_GET["id"]));
    return true;
}

$data = $model::All();

print json_encode($data);
return true;