<?php  
	/**
	* 
	*/
	class Aksi
	{
		private $table_name = "master_satuan";
		private $conn;

		public $nama_satuan;
		public $ket_satuan;
		public $sat_user_update;
		public $sat_last_update;

		function __construct($db)
		{
			# code...
			$this->conn = $db;
		}

		public function view(){
			$query = $this->conn->prepare("select * from ".$this->table_name. " order by nama_satuan asc");
			$query->execute();

			return $query;
		}

		public function nomor(){
			$query = $this->conn->prepare("select coalesce(lpad(cast(cast(substr(max(nama_satuan), 1, 5) as integer)+1 as varchar(5)), 5, '0'),  '00001') as id from ".$this->table_name);
			$query->execute();

			$data = $query->fetch();

			return $data[0];

		}
		public function add(){
			$this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
			$query = $this->conn->prepare("INSERT INTO master_satuan(
            nama_satuan, ket_satuan, sat_user_update, sat_last_update)
			VALUES (:nama_satuan, :ket_satuan, :sat_user_update, :sat_last_update)");

			$data = array(
				":nama_satuan"=>$this->nama_satuan,
				":ket_satuan"=>$this->ket_satuan,
				":sat_user_update"=>$this->sat_user_update,
				":sat_last_update"=>$this->sat_last_update
				);

			$exec = $query->execute($data);

			if ($exec) {
				# code...
				return "saved";
			}else{
				return "not saved";
			}

		}
		public function edit(){
			
		}
		public function delete(){
			
		}
	}
?>