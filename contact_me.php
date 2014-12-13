<?php require_once('Metier/Guest.class.php');
	
	if (isset($_POST['name']) && isset($_POST['type']) && isset($_POST['email'])) {
		
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$type = mysql_real_escape_string($_POST['type']);
		
		Guest::InsertGuest($name, $email, $type);
		var_dump($_POST);
		header('Location: www.google.com');
	} else {
		//echo "string";
	}
	
?>
