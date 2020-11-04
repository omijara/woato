<?php
//error_reporting(0);

$name= $_POST['name'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['msg'];

   /* $to = "obokas2@gmail.com";
         $subject = "Form Submission";
         
         $message="Name : ".$name."<br>"."Phone : ".$mobile."<br>"."E-mail : ".$email."<br>"."Message : ".$msg;

         $header = "From:sales@digitrexmedia.com \r\n";
         $header .= "Cc:omi@itebd.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $msg ="Thanks for your query. We will get back you soon";
            header("location: index.php?msg=".$msg);
         }else {
            echo "Message could not be sent...";
         }
*/



require_once('dbcon.php');

$query  = "INSERT INTO contac_box(name, email, mobile, message)VALUES('$name', '$email','$mobile', '$message')";

$sql = mysqli_query($link, $query);


if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (!$link==false) {


header("location: contact.php?msg0=Thanks for Contact with us. We will get back you soon.'");


}
else{

	echo"conect failed";
	exit;
}

}
?>