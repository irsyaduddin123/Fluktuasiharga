
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$barang = $_POST['barang'];
		$pasar = $_POST['pasar'];
		$harga = $_POST['harga'];
		$tanggal_input = $_POST['tanggal_input'];

		$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("INSERT INTO harga_barang (barang_id, pasar_id, harga, tanggal_input) VALUES (:barang, :pasar, :harga, :tanggal_input)");
				$stmt->execute(['barang'=>$barang, 'pasar'=>$pasar, 'harga'=>$harga, 'tanggal_input'=>$tanggal_input]);
				$_SESSION['success'] = 'Data Berhasil Ditambahkan';
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