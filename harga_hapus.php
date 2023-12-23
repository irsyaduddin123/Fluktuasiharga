<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM harga_barang WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Data Berhasil Dihapus';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Pilih Data Yang Akan Dihapus Terlebih Dahulu';
	}

	header('location: harga.php');
	
?>