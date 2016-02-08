<?php
namespace ADD;

class DB {
	static $conn;
	static $pdo;

	static function connect() {
		if(!static::$conn) {
			static::$conn = mysqli_connect('localhost', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
			mysqli_select_db(static::$conn, getenv('MYSQL_DB'));
		}

		return static::$conn;
	}

	static function query($query) {
		return mysqli_query(static::connect(), $query);
	}

	static function PDO() {
		if(!static::$pdo) {
			 try
			 {
				 static::$pdo = new \PDO(
					 "mysql:host=localhost;dbname=" . getenv('MYSQL_DB'),
					 getenv('MYSQL_USER'),
					 getenv('MYSQL_PASSWORD')
				 );
			 }
			 catch (Exception $e)
			 {
				 die('Erreur : ' . $e->getMessage());
			 }
		}

		return static::$pdo;
	}
}
