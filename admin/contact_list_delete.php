<?php

$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "DELETE FROM contac_box WHERE id= $ID";

$sql = mysqli_query($link, $query);

if ($sql==true){
    
    header('Location: contact_list.php?msg= Successfully Deleted');

} else {
    echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);

?>