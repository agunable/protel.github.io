<?php 
$conn = new mysqli('localhost', 'root', '', 'protel');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM tes WHERE id='1' ");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['sampah']."%";
        $apaa=$row['sampah'];
        $apa1=$row['bau'];
        
	}
}
?>
