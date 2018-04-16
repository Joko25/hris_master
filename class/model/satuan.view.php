<?php

	include "../config/koneksi.php";
	include "aksipdo.php";

	/**
	* 
	*/

	$database = new Database();
	$db = $database->getConnection();

	$aksi = new Aksi($db);
	$satuan = $aksi->view();

	//$num = $satuan->rowCount();

	$result = array();


	while ($row = $satuan->fetch(PDO::FETCH_ASSOC)) {
		# code...
		extract($row);

		//echo $nama_satuan;

		$res = array(
				"nama_satuan" => $nama_satuan,
				"ket_satuan" => $ket_satuan,
				"sat_user_update" => $sat_user_update,
				"sat_last_update" => $sat_last_update
			);

		array_push($result, $res);

	}
//	echo $num;
	echo json_encode($result); 
 ?>