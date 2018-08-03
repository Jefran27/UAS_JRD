<?php
	require "database.php";
   
	$tipeku = $_POST['tipe'];
	
	// prepare and bind
	$stmt = $db->prepare("SELECT * FROM rumah WHERE tipe=?");
	$stmt->bind_param("s", $tipeku);	
	$stmt->execute();
 
	$stmt->bind_result($tipe,$harga);
	
	$result = null;
	while ($stmt->fetch()) {
		$result[] = array(
			'Tipe ' => $tipe,
			'Harga' => $harga
		);
	}
	echo json_encode($result);
 
	$stmt->close();
	$db->close();
?>