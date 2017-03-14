<?php
include('config.php');

$id = $_GET['id'];
$sampah = $_GET['sampah'];
$bau = $_GET['bau'];
$status = $_GET['status'];


$query = mysql_query("UPDATE tes SET sampah='$sampah', bau='$bau', status='$status' WHERE id='$id'") or die(mysql_error());

if ($query) {
	echo "sukses!";
}
?>