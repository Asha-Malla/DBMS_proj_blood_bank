<?php

$bg=$_POST['bg'];



$con=new mysqli('localhost','root','','blood_bank_proj_db');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}


$sql = "SELECT * FROM donar_tb where bg='".$bg."'";

$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0) {
    while ($row=mysqli_fetch_assoc($res)) {
    	# code...
    	print "Donar Name: ".$row["name"]."&nbsp &nbsp &nbsp Blood Group: ".$row["bg"]."&nbsp &nbsp &nbsp Gender: ".$row["gender"]."&nbsp &nbsp &nbsp Email-ID: ".$row["email"]."&nbsp &nbsp &nbsp Donar-ID: ".$row["id"]."&nbsp &nbsp &nbsp Phone Number: ".$row["phno"]."&nbsp &nbsp &nbsp Address: ".$row["addr"];
         	echo "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($con);

?>