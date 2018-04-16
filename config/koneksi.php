<?php  
	//print_r(PDO::getAvailableDrivers());
	// class ClassName extends AnotherClass
	// {
	// 	private $host = "192.168.3.229";
	// 	private $port = "5432";
	// 	private $user = "askara";
	// 	private $pass = "159263";
	// 	private $db = "sita-backup";

	// 	public $conn;
	// 	$db = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');


	// 	public function getConnection(){
	// 		$db = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');
	// 	}
		
		
	// }

/**
* 
*/
class Database
{
	private $host = "localhost";
	private $username = "postgres";
	private $password = "159263";
	private $db_name = "dadali";

	public $conn;

	public function getConnection(){
		$this->conn = null;

		try {
			$this->conn = new PDO('pgsql:dbname='.$this->db_name.';host='.$this->host.';user='.$this->username.';password='.$this->password);
			$this->conn->exec("set names utf8");
		} catch (PDOException $exception) {
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}

?>