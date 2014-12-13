<?php

	class Database
	{
		public static $bdd;
		public static function getConnection()
		{
			if (isset(self::$bdd)) {
				return self::$bdd;
			} else {
				try {
					self::$bdd = new PDO('mysql:host=localhost;dbname=osdbd', 'root', '');
					return self::$bdd;
				} catch (PDOException $e) {
					die('Erreur de connexion base de données '.$e->getMessage());
					return null;
				}
			}
			
		}
	}
?>