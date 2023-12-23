
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$nama = $_POST['nama'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM barang WHERE nama=:nama");
		$stmt->execute(['nama'=>$nama]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Barang Sudah Terdaftar';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO barang (nama) VALUES (:nama)");
				$stmt->execute(['nama'=>$nama]);
				$_SESSION['success'] = 'Barang Berhasil Ditambahkan';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Isi Form Terlebih Dahulu';
	}

	header('location: barang.php');

?>