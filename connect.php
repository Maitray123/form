<?php
	$Power_Status = $_POST['Power_Status'];
	$Furnished = $_POST['Furnished'];
	$bath = $_POST['bath'];
	$Transaction_type = $_POST['Transaction_type'];
	$water = $_POST['water'];
	$floor = $_POST['floor'];
    $Floor_no = $_POST['Floor_no'];
    $Floor_ratio = $_POST['Floor_ratio'];
    $Amenities = $_POST['Amenities'];

	// Database connection
	$conn = new mysqli('localhost','root','','hehe');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into new(Power_Status, Furnished, bath, Transaction_type, water, floor,Floor_no,Floor_ratio,Amenities) values(?, ?, ?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("ssissiiii", $Power_Status, $Furnished, $bath, $Transaction_type, $water, $floor,$Floor_no,$Floor_ratio,$Amenities);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>