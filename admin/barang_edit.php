<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];

		try{
			$stmt = $conn->prepare("UPDATE barang SET nama=:nama WHERE id=:id");
			$stmt->execute(['nama'=>$nama, 'id'=>$id]);
			$_SESSION['success'] = 'Barang Berhasil Diedit';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Isi Form Terlebih Dahulu';
	}

	header('location: barang.php');

?>