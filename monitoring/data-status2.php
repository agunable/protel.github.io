<?php 
$conn = new mysqli('localhost', 'root', '', 'protel');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM tes WHERE id='2' ");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		
        if($row['status']==1){
           ?><h5 style="color: green;"><?php echo "OPEN"; ?></h5> <?php
        }
        else{
            ?><h5 style="color: red;"><?php echo "CLOSED"; ?></h5> <?php
        }
        
        
	}
}
?>
