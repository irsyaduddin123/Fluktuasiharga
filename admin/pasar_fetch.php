<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM pasar");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['id']."' class='append_items'>".$row['nama']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>