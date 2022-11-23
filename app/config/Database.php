<?php
session_start();
class Database{
	
	private $host;
    private $user;
    private $password;
    private $database; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host = getenv("MYSQL_HOST"), $this->user = getenv("MYSQL_USER"), $this->password = getenv("MYSQL_PASSWORD"), $this->database = getenv("MYSQL_DATABASE"));
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>