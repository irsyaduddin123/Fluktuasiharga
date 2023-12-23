<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$lokasi = $_POST['lokasi'];

		try{
			$stmt = $conn->prepare("UPDATE pasar SET nama=:nama, lokasi=:lokasi WHERE id=:id");
			$stmt->execute(['nama'=>$nama, 'lokasi'=>$lokasi, 'id'=>$id]);
			$_SESSION['success'] = 'Pasar Berhasil Diedit';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Isi Form Terlebih Dahulu';
	}

	header('location: pasar.php');

?>