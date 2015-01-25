<?php
	$email = $_GET['email'];
	$key = $_GET['key'];
	$status_bdd = null;
	$key_bdd = null;
	require_once('Metier/Database.class.php');
	require_once('Metier/Guest.class.php');

	try {
		$rep = Database::getConnection()->prepare("SELECT guest.key,guest.status FROM guest WHERE email=:email ");
		$rep->execute(array('email'=>$email));
		if ($data = $rep->fetch()) {
			
			$key_bdd = $data['key'];	// Récupération de la clé
	    	$status_bdd = $data['status']; // $actif contiendra alors 0 ou 1


		// On teste la valeur de la variable $actif récupéré dans la BDD
		if($status_bdd == 'enable') // Si le compte est déjà actif on prévient
		  {
		     echo "Votre compte est déjà actif !";
		     header("Location: ../OSDaysBeta");
		  }
		else // Si ce n'est pas le cas on passe aux comparaisons
		  {
		     if($key == $key_bdd) // On compare nos deux clés	
		       {
		          // Si elles correspondent on active le compte !	
		          echo "Votre compte a bien été activé !";
		          Guest::sendMailConfirmationActivation($email);
		 
		          // La requête qui va passer notre champ actif de 0 à 1
		          $rep = Database::getConnection()->prepare("UPDATE guest SET status = 'enable' WHERE email like :email ");
		          $rep->bindParam(':email', $email);
		          $rep->execute();
		          header("Location: ../OSDaysBeta");
		          
		       }
		     else // Si les deux clés sont différentes on provoque une erreur...
		       {
		          echo "Erreur ! Votre compte ne peut être activé...";
		          header("Location: ../OSDaysBeta");
		       }
		  }

		} else {
			header("Location: ../OSDaysBeta");
		}
		
	} catch (PDOException $e) {
		die("Error activation ".$e->getMessage());
	}
?>