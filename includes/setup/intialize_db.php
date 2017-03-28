<?php
//setup datebase 
//mysql 

include "../config/DB_config.php";
include "../func.php";



if(!is_table_exists($DB_CONN, TABLE_CONTACT_US)) {
	
    $cntct_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_CONTACT_US."(
				id_contact_us	integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
				contact_name	varchar(255) NOT NULL,
				contact_mail	varchar(255) NOT NULL,
				contact_content text 	NOT NULL,
				date_created  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($cntct_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_CONTACT_US."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_CONTACT_US."</b> created successfully!<br>";
}


if(!is_table_exists($DB_CONN, TABLE_PRODUCTS_DESCRIPTION)) {
	
    $pd_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_PRODUCTS_DESCRIPTION."(
			id_products			integer NOT NULL,
			language_id			integer NOT NULL,
			products_name 		varchar(255) NOT NULL,
			products_description text NOT NULL,
			products_viewed 	integer NOT NULL
			)";
	echo $DB_CONN->exec($pd_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_PRODUCTS_DESCRIPTION."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_PRODUCTS_DESCRIPTION."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_MANUFACTURERS)) {
	
    $mnfctr_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_MANUFACTURERS."(
			id_manufacturers	integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			manufacturer_name	integer NOT NULL,
			manufacturer_image	integer NOT NULL,
			date_created  	DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			date_last_modified  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($mnfctr_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_MANUFACTURERS."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_MANUFACTURERS."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_PRODUCTS)) {
	
    $prdct_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_PRODUCTS."(
			id_products			integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			EAN					varchar(255) NOT NULL,
			product_model 		varchar(255) NOT NULL,
			manufacturers_id	integer NOT NULL,
			product_weight		decimal 	NOT NULL,
			product_quantity	integer 	NOT NULL,
			product_image		varchar(255) NOT NULL,
			product_status		tinyint(1) 	NOT NULL,
			product_price		decimal NOT NULL,
			product_date_added  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			product_date_modified  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($prdct_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_PRODUCTS."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_PRODUCTS."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_COUNTRIES)) {
	
    $cntry_tble_crt_qry = file_get_contents("countries_table.txt");

	echo $DB_CONN->exec($cntry_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_COUNTRIES."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_COUNTRIES."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_TAX)) {
	
    $tx_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_TAX."(
			id_tax				integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			tax_title 			varchar(255) NOT NULL,
			tax_description 	text NOT NULL,
			tax_date_added  	DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			tax_date_modified  	DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";

	echo $DB_CONN->exec($tx_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_TAX."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_TAX."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_CUSTOMERS)) {
	
    $tx_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_CUSTOMERS."(
			id_customer			integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			customer_firstname	varchar(255) NOT NULL,
			customer_lastname	varchar(255) NOT NULL,
			customer_email		varchar(255) NOT NULL,
			customer_dob	  	DATE NOT NULL,
			customer_password	varchar(255) NOT NULL,
			customer_password_old	varchar(255) NOT NULL,
			customers_telephone	integer,
			customer_newsletter	tinyint NOT NULL,
			customers_ip		varchar(15) NOT NULL,
			tax_date_added  	DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			tax_date_modified  	DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";

	echo $DB_CONN->exec($tx_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_CUSTOMERS."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_CUSTOMERS."</b> created successfully!<br>";
}

if(!is_table_exists($DB_CONN, TABLE_PRODUCTS_TAX)) {
    $mnfctr_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_PRODUCTS_TAX."(
			id_products_tax		integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			id_products			integer NOT NULL,
			id_tax				integer NOT NULL,
			countries_id		integer NOT NULL,
			date_added  		DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			date_modified  		DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($mnfctr_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_PRODUCTS_TAX."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_PRODUCTS_TAX."</b> created successfully!<br>";
}


if(!is_table_exists($DB_CONN, TABLE_CUSTOMERS_INFO)) {
    $mnfctr_tble_crt_qry = "CREATE TABLE IF NOT EXISTS ".TABLE_CUSTOMERS_INFO."(
			id_cutomers_ifo			integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
			id_customer				integer NOT NULL,
			countries_id			integer NOT NULL,
			coustomer_street_address	integer NOT NULL,
			coustomer_state			varchar(255) NOT NULL,
			coustomer_city			varchar(255) NOT NULL,
			coustomer_postcode		varchar(255) NOT NULL,
			zone_id					integer DEFAULT 0,
			acc_date_created  		DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			acc_date_modified  		DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($mnfctr_tble_crt_qry) ? 
		"<br/>Table <b>".TABLE_CUSTOMERS_INFO."</b> Failed!<br>" : 
		"<br/>Table <b>".TABLE_CUSTOMERS_INFO."</b> created successfully!<br>";
}

echo "<br/> Script Finished !<br/>";


?>
