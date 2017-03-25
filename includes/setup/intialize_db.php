<?php
//setup datebase 
//mysql 

include "../config/DB_config.php";
include "../func.php";

if(!is_table_exists($DB_CONN, "contact_us")) {
	
     $cntct_tble_crt_qry = "CREATE TABLE IF NOT EXISTS contact_us(
				id_contact_us	integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
				contact_name	varchar(255) NOT NULL,
				contact_mail	varchar(255) NOT NULL,
				contact_content text 	NOT NULL,
				date_created  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
			)";
	echo $DB_CONN->exec($cntct_tble_crt_qry) ? 
		"<br/>Table <b>contact_us</b> Failed!<br>" : 
		"<br/>Table <b>contact_us</b> created successfully!<br>";
}



echo "<br/> Script Finished !<br/>";


?>