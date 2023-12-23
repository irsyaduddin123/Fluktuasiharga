<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$pasar = $_POST['pasar'];
		$harga = $_POST['harga'];
		$tanggal_input = $_POST['tanggal_input'];

		try{
			$stmt = $conn->prepare("UPDATE harga_barang SET barang_id=:nama, pasar_id=:pasar, harga=:harga, tanggal_input=:tanggal_input WHERE id=:id");
			$stmt->execute(['nama'=>$nama, 'pasar'=>$pasar, 'harga'=>$harga, 'tanggal_input'=>$tanggal_input,'id'=>$id]);
			$_SESSION['success'] = 'Data Berhasil Diubah';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Isi Form Terlebih Dahulu';
	}

	header('location: harga.php');

?>