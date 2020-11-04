<?php
session_start ();
$user = $_SESSION['username'];

$new_password= $_POST["npass"];
$confirm_password = $_POST["cpass"];

require_once('../dbcon.php');
$query = "UPDATE user SET password ='$confirm_password' WHERE username = '$user'";
//var_dump($query);
//exit();

$sql = mysqli_query($link, $query);

if ($link == true) {

	$message = "Password Changed Successful. Please Login ";
    echo "<script>
    alert('$message');
    window.location.href = 'logout.php';
    </script>";
    exit;

}
else{

	echo"Update failed";
}

?>