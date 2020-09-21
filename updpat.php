<?php
$name=$_POST['name'];
$bg=$_POST['bg'];
$gender=$_POST['gender'];
$ds=$_POST['ds'];
$hp=$_POST['hp'];
$email=$_POST['email'];
$id=$_POST['id'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];


$con=new mysqli('localhost','root','','blood_bank_proj_db');

if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}

$sql="UPDATE patient_tb SET name='$name',bg='$bg',gender='$gender',ds='$ds',hp='$hp',email='$email',phno=$phno,addr='$addr' where id=$id ;";

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {

    echo "Error updating record: " ;
}

mysqli_close($con);

?>