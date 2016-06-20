<?php
class Connection {
	private static $user = "u247479859_mihai`";
	private static $password = "123123";
	private static $connection = null;
	private $dbh = null;
	public static function getInstance() {
		
		if (empty(self::$connection)) {		
			self::$connection = new self(); // === $connection = new Connection()
		}
		return self::$connection; 
	}
	public function connect() {
		
		if (!(self::$connection->dbh instanceof PDO)) {
			
			try {
				$dsn = "mysql:host=mysql.hostinger.ru";
				self::$connection->dbh = new PDO($dsn, self::$user, self::$password); 
				self::$connection->dbh->exec("SET CHARACTER SET utf8");
				self::$connection->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return self::$connection->dbh;
			}
			catch (PDOException $e) {
				echo '<br>' . $e->getMessage(). '<br>';
			}
		}
		else {
			return self::$connection->dbh;
		}
	}
}
?>