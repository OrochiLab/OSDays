<?php require_once('Guest.class.php');
	
	if($_POST)
	{
		//check if its an ajax request, exit if not
	    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	       
	        $output = json_encode(array( //create JSON data
	            'type' => 'error',
	            'text' => 'Sorry contact Amine or Mouad'
	        ));
	        die($output); //exit script outputting json data
	    }
	   
	    //Sanitize input data using PHP filter_var().
	    $name      = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	    $email     = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	    $type   = filter_var($_POST["userType"], FILTER_SANITIZE_STRING);
	   
		if(strlen($name)<4){ // If length is less than 4 it will output JSON error.
	        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
	        die($output);
	    }
	    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //email validation
	        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
	        die($output);
	    }
	    if(Guest::CheckEmailIfExist($email) == 1)
	    {
	    	$output = json_encode(array('type'=>'error', 'text' => 'Votre email existe déja !'));
	        die($output);
	    }else{

	    	$insertion = Guest::InsertGuest($name, $email, $type);
		    if ($insertion == true) {
		    	 $output = json_encode(array('type'=>'success', 'text' => 'Nous vous remercions pour votre inscription.'));
		        die($output);
		    } else {
		    	$output = json_encode(array('type'=>'error', 'text' => 'Une erreur est levé veuillez reprendre ulterieuremnt.'));
		        die($output);
		    }
	    }
	    
	}
?>
