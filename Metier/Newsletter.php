<?php
	if($_POST)
	{
		require_once('Guest.class.php');
		//check if its an ajax request, exit if not
	    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	       
	        $data = json_encode(array( //create JSON data
	            'type'=>'error',
	            'status'=>'error',
	            'text' => 'Sorry contact Amine or Mouad'
	        ));
	        die($data); //exit script outputting json data
	    }

	    $email = $_POST['email'];

	    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //email validation
	        $data = json_encode(array('type'=>'error','status'=>'error', 'text' => 'Please enter a valid email!'));
	        die($data);
	    }
	    $insertionNewLetter = Guest::InsertEmailNewLetter($email);
	    if ($insertionNewLetter == true) {
	    	 $data = json_encode(array('type'=>'success','status'=>'success', 'text' => 'Nous vous remercions pour votre inscription.'));
	        die($data);
	    } else {
	    	$data = json_encode(array('type'=>'error','status'=>'error', 'text' => 'Une erreur est levé veuillez reprendre ulterieuremnt.'));
	        die($data);
	    }
	}
?>