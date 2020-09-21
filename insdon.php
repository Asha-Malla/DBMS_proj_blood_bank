<?php
$name=$_POST['name'];
$bg=$_POST['bg'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$id=$_POST['id'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];


$con=new mysqli('localhost','root','','blood_bank_proj_db');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}else{
	$stmt=$con->prepare("insert into donar_tb(name,bg,gender,email,id,phno,addr) values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssiis",$name,$bg,$gender,$email,$id,$phno,$addr);
	$stmt->execute();
	echo "record inserted......";
	$stmt->close();
	$con->close();
}

?>