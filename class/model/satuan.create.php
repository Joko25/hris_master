<?php
	include "../config/koneksi.php";
	include "aksipdo.php";

	$database = new Database();
	$db = $database->getConnection();

	$aksi = new Aksi($db);
	$aksi->nama_satuan = $aksi->nomor();
	$aksi->ket_satuan = 'PDOSATUAN3';
	$aksi->sat_user_update = 'PDO';
	$aksi->sat_last_update = '2017-04-12';

	$add = $aksi->add();
	
	print_r($add);
?>