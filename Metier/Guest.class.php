<?php
	/**
	* 
	*/
	require_once('Database.class.php');
	class Guest
	{	
		private $id;
		private $nom;
		private $typeReg;
		private $dateReg;
		private $email;

		public function __construct($id,$nom,$typeReg,$dateReg,$email)
		{
			$this->id = $id;
			$this->nom = $nom;
			$this->typeReg = $typeReg;
			$this->dateReg = $dateReg;
			$this->email = $email;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}

		public function getNom()
		{
			return $this->nom;
		}

		public function setTypeReg($typeReg)
		{
			$this->typeReg = $typeReg;
		}

		public function getTypeReg()
		{
			return $this->typeReg;
		}

		public function setDateReg($dateReg)
		{
			$this->dateReg = $dateReg;
		}

		public function getDateReg()
		{
			return $this->dateReg;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getEmail()
		{
			return $this->email;
		}


		public static function InsertGuest($nom,$email,$typeReg)
		{
			try {
				
				$Rsql="INSERT INTO guest (ID, nom, email, dateReg, typeReg)
						VALUES (null,:nom,:prenom,:email,:dateReg,:typeReg)";
				$Tsql=array('nom'=>$nom,'email'=>$email,'dateReg'=>date('l jS \of F Y h:i:s A'),'typeReg'=>$typeReg);
				$rep = Database::getConnection()->prepare($Rsql);
				
				$rep->execute($Tsql);

			} catch (PDOException $e) {
				die('Error insertion'.$e->getMessage());
			}
		}
		
		public static function GetAllGest()
		{
			try {
				$guest = array();
				
				$Rsql="SELECT * From guest";
				$rep = Database::getConnection()->prepare($Rsql);
				$rep->execute();

				while ($data = $rep->fetch()) {
					$guest[] = new Guest( $data['id'], $data['nom'], $data['typeReg'], $data['dateReg'], $data['email']);
				}
				return $guest;
			} catch (PDOException $e) {
				die('Error selection'.$e->getMessage());
			}
		}
	}

?>