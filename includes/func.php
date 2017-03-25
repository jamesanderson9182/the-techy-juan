<?php

function connect_DB(){
	try {
	    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB, DB_USER, DB_PASS);
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $db;
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

function input_Validation_basic($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

function is_validate_url($url){
	 return (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url));
}

function is_validate_mail($mail){
	 return filter_var($mail, FILTER_VALIDATE_EMAIL);
}

function is_table_exists($pdo, $table) {
    try {
        $result = $pdo->query("SELECT * FROM $table LIMIT 1");
    } catch (Exception $e) {
        return false;
    }
    return $result !== false;
}


$DB_CONN	=  connect_DB();

?>