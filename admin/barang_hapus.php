<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM barang WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Barang Berhasil Dihapus';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Pilih Barang Terlebih Dahulu';
	}

	header('location: barang.php');
	
?>