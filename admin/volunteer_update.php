<?php

$ID= $_GET["id"];
$fname= $_GET['fname'];
$lname= $_GET['lname'];
$email= $_GET['email'];
$mobile = $_GET['mobile'];
$institute = $_GET['institute'];
$address = $_GET['paddress'];


require_once('../dbcon.php');

$query = "UPDATE volunteer_list SET first_name ='$fname', last_name ='$lname', email = '$email', mobile = '$mobile', institute = '$institute', paddress = '$address' WHERE id= '$ID'";

$sql = mysqli_query($link, $query);


if ($link == true) {


header('location: volunteer_list.php?msg2=Information Successfully Updated');

}
else{

	echo"Update failed";
}

?>