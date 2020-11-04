<?php
//error_reporting(0);
require_once('../dbcon.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$uname = $_POST['username'];
$role = $_POST['user_role'];
$email = $_POST['email'];
$password = $_POST["pword"];
//$password = md5($_POST['pword']);

$image = $_FILES['img']['name'];
$image_url = "assets/img/user/".basename($image);
//move_uploaded_file($_FILES['img']['tmp_name'],$image_url);

if(isset($_FILES['img'])) {
    $errors     = array();
    $maxsize    = 100000;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

    if(($_FILES['img']['size'] >= $maxsize) || ($_FILES["img"]["size"] == 0)) {
    	$errors[] = 'File too large. File must be less than 100 kilobytes.';
        //$msg = 'Image must be less than 100 kilobytes.';
    }	//header("location: sign-up.php?msg=".$msg);

    if((!in_array($_FILES['img']['type'], $acceptable)) && (!empty($_FILES["img"]["type"]))) {
    	$errors[] = 'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
        //$msg = 'Only JPG, JPEG and PNG types are accepted.';
        //header("location: sign-up.php");
        //header("location: sign-up.php?msg=".$msg2);
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['img']['tmp_name'], $image_url);
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");
            location ="adduser.php";
            </script>';
            
    	echo "error uploading image";
        }

        die(); //Ensure no more processing is done
    }

}

/*if (empty($_POST['email'])) {
        $error[] = 'Please Enter your Email ';
    } else {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
            //regular expression for email validation
            $email = $_POST['email'];
            $error[] = 'Your EMail Address is invalid ';
        } 
        else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");
            location ="sign-up.php";
            </script>';
            
    	//echo "";
        }

        die(); //Ensure no more processing is done
    }
    }
*/

$duplicate="SELECT * from user where (email='$email' or username='$uname')";
$conect=mysqli_query($link,$duplicate);
if (mysqli_num_rows($conect) > 0) {

$message ="Username or Email Already Exits.";
header("location: adduser.php?message=".$message);
exit;
}
else{
$query = "INSERT INTO user(first_name, last_name, username, role, email, password, image) VALUES ('$fname','$lname','$uname', '$role', '$email','$password','$image_url')";

}
$sql = mysqli_query($link, $query);
//exit();

if (!$link==false) {

$msg ="User created successfully";
header("location: adduser.php?msg=".$msg);
exit;

}
else{

	echo"conect failed";
	exit;
}

?>


