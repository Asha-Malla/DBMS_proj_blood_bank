<?php

$id=$_POST['id'];

$con=new mysqli('localhost','root','','blood_bank_proj_db');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}

$sql = "DELETE FROM patient_tb WHERE id=".$id;

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>