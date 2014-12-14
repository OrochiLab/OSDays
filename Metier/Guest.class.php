<?php
	/**
	* 
	*/
	require_once('Database.class.php');
	define('GoogleUser', 'opensourcedays4.0@gmail.com');
	define('GooglePass', '#"Dioxiz"#;');
	class Guest
	{	
		private $id;
		private $nom;
		private $typeReg;
		private $dateReg;
		private $email;
		private $status;
		private $key;

		public function __construct($id,$nom,$typeReg,$dateReg,$email,$status,$key)
		{
			$this->id = $id;
			$this->nom = $nom;
			$this->typeReg = $typeReg;
			$this->dateReg = $dateReg;
			$this->email = $email;
			$this->status = $status;
			$this->key = $key;
		}

		public function setStatus($status)
		{
			$this->status = $status;
		}

		public function getStatus()
		{
			return $this->status;
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

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->key = $key;
		}

		public function setKeyGuest($nom,$email)
		{
			try {
				// Génération aléatoire d'une clé
				$key = md5(microtime(TRUE)*100000);

				// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
				$Rsql = 'UPDATE guest SET guest.key=:key WHERE email=:email';
				//$Tsql = array('key'=>$key,'nom'=>$nom,'email'=>$email);
				$rep = Database::getConnection()->prepare($Rsql);
				$rep->bindParam(':key', $key);
				$rep->bindParam(':email', $email);
				$rep->execute();
				Guest::sendMailConfirmation($email,$key);
				return true;
			} catch (PDOException $e) {
				die('Error Key Guest '.$e->getMessage());
				return null;
			}
		}

		public function sendMailConfirmationActivation($email)
		{
			
			// Préparation du mail contenant le lien d'activation
			$sujet = "Confirmation d'activation de votre compte" ;
			$entete = "From: inscription@OpenSourceDays4.0.com" ;
			 
			// Le lien d'activation est composé du login(log) et de la clé(cle)
			$message = utf8_decode("Administrateur,
			 
			Merci pour l'activation de votre inscription, veuillez être present au Open source days 4.0 qui aura lieu le 24 - 25 Feverier 2015 .'
			 
			 
			---------------
			Ceci est un mail automatique, Merci de ne pas y répondre.");
			 
			Guest::Send_Mail($email,$sujet,$message); // Envoi du mail
		}

		public function sendMailConfirmation($email,$key)
		{
			
			// Préparation du mail contenant le lien d'activation
			$sujet = "Activer votre compte" ;
			$entete = "From: inscription@OpenSourceDays4.0.com" ;
			 
			// Le lien d'activation est composé du login(log) et de la clé(cle)
			$message = utf8_decode('Bienvenue au Open Source Days 4.0,
			 
			Pour activer votre inscription, veuillez cliquer sur le lien ci dessous
			ou copier/coller dans votre navigateur internet,un autre email de Confirmation vous sera envoyer.
			 
			http://127.0.0.1/OSDays/activation.php?email='.urlencode($email).'&key='.urlencode($key).'
			 
			 
			---------------
			Ceci est un mail automatique, Merci de ne pas y répondre.');
			Guest::Send_Mail($email,$sujet,$message); // Envoi du mail
		}
		public static function InsertGuest($nom,$email,$typeReg)
		{
			try {
				
				$Rsql="INSERT INTO guest (ID, nom, email, dateReg, typeReg,status) VALUES (null,:nom,:email,:dateReg,:typeReg,'disable')";
				$Tsql=array('nom'=>$nom,'email'=>$email,'dateReg'=>date('l jS \of F Y h:i:s A'),'typeReg'=>$typeReg);
				$rep = Database::getConnection()->prepare($Rsql);
				$rep->execute($Tsql);
				Guest::setKeyGuest($nom,$email);
				return true;
			} catch (PDOException $e) {
				die('Error insertion'.$e->getMessage());
				return false;
			}
		}

		public static function InsertEmailNewLetter($email)
		{
			try {
				
				$Rsql="INSERT INTO newletter (ID, email) VALUES (null,:email)";
				$Tsql=array('email'=>$email);
				$rep = Database::getConnection()->prepare($Rsql);
				
				$rep->execute($Tsql);
				return true;
			} catch (PDOException $e) {
				die('Error insertion'.$e->getMessage());
				return false;
			}
		}
		
		public static function CheckEmailIfExist($email)
		{
			try {
	
				$Rsql="SELECT * FROM guest WHERE email=:email";
				$Tsql=array('email'=>$email);
				$rep = Database::getConnection()->prepare($Rsql);
				$rep->execute($Tsql);
				if ($data = $rep->fetch()) {
					return true;
				} else {
					return false;
				}
			} catch (PDOException $e) {
				die('Error selection'.$e->getMessage());
				return null;
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
					$guest[] = new Guest( $data['ID'], $data['nom'], $data['typeReg'], $data['dateReg'], $data['email'], $data['status'], $data['key']);
				}
				return $guest;
			} catch (PDOException $e) {
				die('Error selection'.$e->getMessage());
			}
		}


		public static function Send_Mail($to,$subject,$body)
		{
			require_once('class.phpmailer.php');
			$from = GoogleUser;
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->SMTPAuth   = true;  // SMTP authentication
			$mail->Mailer = "smtp";
			$mail->Host       = "tls://smtp.gmail.com"; // Amazon SES server, note "tls://" protocol
			$mail->Port       = 465;                    // set the SMTP port
			$mail->Username   = GoogleUser;  // SES SMTP  username
			$mail->Password   = GooglePass;  // SES SMTP password
			$mail->SetFrom($from, 'noreply@OpenSourceDays4.0.com');
			$mail->AddReplyTo($from,'Open Source Days 4.0');
			$mail->Subject = $subject;
			$mail->MsgHTML($body);
			$address = $to;
			$mail->AddAddress($address, $to);

			if(!$mail->Send())
			return false;
			else
			return true;

		}
	}
?>