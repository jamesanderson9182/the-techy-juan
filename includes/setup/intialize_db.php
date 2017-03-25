<?php
//setup datebase 
//mysql 

include "../config/DB_config.php";
include "../func.php";


/*

	Contact us table

*/
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



/*

	Table Products

*/
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


/*

	Products Description table where you can hold description in different languages

*/
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

/*

	manufaction table

*/
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


echo "<br/> Script Finished !<br/>";


?>