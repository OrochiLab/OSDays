<?php
	/**
	* 
	*/
	require_once('Database.class.php');
	abstract class Guest
	{
		public static function InsertGuest($nom,$prenom,$email,$typeReg)
		{
			try {
				$dateReg = date('l jS \of F Y h:i:s A');
				//*********//
				$guest = null;
				$Rsql="INSERT INTO (ID, nom, prenom, email, dateReg, typeReg) guest VALUES (null,:nom,:prenom,:email,:dateReg,:typeReg)";
				$Tsql=array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'dateReg'=>$dateReg,'typeReg'=>$typeReg);
				$rep = Database::getConnection()->prepare($Rsql);
				$rep->execute($Tsql);

			} catch (PDOException $e) {
				die('Error insertion'.$e->getMessage());
			}
		}
	}
		Guest::InsertGuest('nom', 'prenom', 'email', 'typeReg');

?>