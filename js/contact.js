var Cntct = jQuery.noConflict();

Cntct(document).ready(function ($){

	var contactName, contactMail, contactContente;

	$("#submit_contact").on("click touchdown", function (){
		contactName	= $("#contact_name").val();
		contactMail	= $("#contact_mail").val();
		contactContente	= $("#contact_content").val();
		if(isEmpty(contactName) || isEmpty(contactMail) || isEmpty(contactContente)){
			console.log(" not empty line 12");
			return false;
		}

		//validation check 
		if(!isValidName(contactName) || !isValidEmail(contactMail)){
			console.log(" invalid line 18");
			!isValidName(contactName) ?
				console.log("contactName is invalid"):
				console.log("contactMail is invalid");
			return false;
		}

		contactContente	= removeHtml(contactContente);
		if(isEmpty(contactContente)){//empty string after validation
			console.log(" not empty line 24");
			return false;
		}

	});



});