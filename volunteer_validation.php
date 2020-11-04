<?php
//error_reporting(0);

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$institute= $_POST['institute'];
$present_address= $_POST['paddress'];
$message = $_POST['msg'];


require_once('dbcon.php');

$query  = "INSERT INTO volunteer_list(first_name, last_name, email, mobile, institute, paddress, message)VALUES('$fname','$lname', '$email','$mobile', '$institute', '$present_address', '$message')";

$sql = mysqli_query($link, $query);


if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (!$link==false) {


header("location: volunteer_form.php?msg=Thanks for your interest to work with us. We will contact you soon.'");


}
else{

	echo"conect failed";
	exit;
}

}
?>