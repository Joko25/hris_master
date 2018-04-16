<?php
	include "koneksi.php";

	/**
	* 
	*/
	class Uom
	{
		private $table_name = "master_satuan";
		private $conn;
		public $ket_satuan;
		public $nama_satuan;

		function __construct($db)
		{
			$this->conn = $db;
		}

		public function getSatuan(){
			//$query = "SELECT * FROM ".$this->table_name;

			$query = $this->conn->prepare("SELECT * FROM ".$this->table_name);
			$query->execute();
			//$this->ket_satuan = "SELECT * FROM ".$this->table_name;
			return $query;
		}
	}

	$database = new Database();
	$db = $database->getConnection();

	$uom = new Uom($db);
	$getuom = $uom->getSatuan();

	//$num = $getuom->rowCount();
	//echo $getuom;

	while ($row = $getuom->fetch(PDO::FETCH_ASSOC)) {
		# code...
		extract($row);
		echo $nama_satuan.' '.$ket_satuan.'<br/>'; 
		
	}
 ?>