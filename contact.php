e<?php
include "includes/head.php";
include "includes/config/DB_config.php";
include "includes/func.php";

if(isset($_POST["submit_contact"])){
	// check if everything is set
	if(isset($_POST["contact_name"])){
		$contact_name		= $_POST["contact_name"];
	}else{
		echo "<br/><br/><br/>Error : Contact name is not set!<br/>";
		return false;
	}

	if(isset($_POST["contact_mail"])){
		$contact_mail		= $_POST["contact_mail"];
	}else{
		echo "<br/><br/><br/>Error : Contact mail is not set!<br/>";
		return false;
	}

	if(isset($_POST["contact_content"])){
		$contact_content	= $_POST["contact_content"];
	}else{
		echo "<br/><br/><br/>Error : Contact contact is not set!<br/>";
		return false;
	}

	//now check for validation
	if(strlen($contact_content) === 0 || strlen($contact_content) >= 60000){
		echo "<br/><br/><br/>Error : length error!<br/>";
		return false;
	}

	$contact_name		= input_Validation_basic($contact_name);
	$contact_mail		= is_validate_mail($contact_mail);
	$contact_content	= input_Validation_basic($contact_content);
	if(empty($contact_name) || empty($contact_mail)){
		echo "<br/><br/><br/>Error : Name or mail field is emtpy!<br/>";
		return false;
	}
	$contact_us_i_query = $DB_CONN->prepare(
					"INSERT INTO "
						.TABLE_CONTACT_US .
						"(contact_name, contact_mail, contact_content)
    				VALUES
    					 (:contact_name, :contact_mail, :contact_content)");
	$result_q			= $contact_us_i_query->execute(
		array(
    		"contact_name" => $contact_name,
    		"contact_mail" => $contact_mail,
    		"contact_content" => $contact_content)
	);
	if( $result_q ) 
		echo " contact has sent succesfully !";
}
?>
<head>
	<script type="text/javascript" src="js/contact.js"></script>
</head>
	<div class="page">
        <div class="page-inner" style="text-align: left;">
			<a class="page-title">Contact Us</a>
		</div>
        <div class="page-inner">
        	<!--Placeholder Div -->
        	<div style="height:200px;"></div>
        </div>
        <div class="page-innder">
			<div class="container">
				<br/><br/><br/><br/><br/>
			    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-horizontal>
				    <div class="form-group form-group-lg">
					    <label class="col-sm-2 control-label" for="contact_name">Name :</label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="name"/>
					    </div>
					    <label class="col-sm-2 control-label" for="contact_mail">Email :</label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="contact_mail" name="contact_mail" placeholder="eg. xyz@mail.com"/>
					    </div>
					    <label class="col-sm-2 control-label" for="contact_content">Content :</label>
					    <div class="col-sm-10">
					    	<textarea  class="form-control" id="contact_content" name="contact_content" placeholder="further Information"></textarea>
					    </div>
					    <input type="submit" id="submit_contact" name="submit_contact" value="Send!"/>
				    </div>
			    </form>
			</div>
		</div>
	</div>

<?php
include 'includes/foot.php';
?>