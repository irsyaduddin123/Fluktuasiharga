
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$nama = $_POST['nama'];
		$lokasi = $_POST['lokasi'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM pasar WHERE nama=:nama");
		$stmt->execute(['nama'=>$nama]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Pasar Sudah Terdaftar';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO pasar (nama, lokasi) VALUES (:nama, :lokasi)");
				$stmt->execute(['nama'=>$nama, 'lokasi'=>$lokasi]);
				$_SESSION['success'] = 'Pasar Baru Berhasil Ditambahkan';
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

	header('location: pasar.php');

?>