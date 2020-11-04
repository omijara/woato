<?php

$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "DELETE FROM volunteer_list WHERE id= $ID";

$sql = mysqli_query($link, $query);

if ($sql==true){
    
    header('Location: volunteer_list.php?msg1= Successfully Deleted');

} else {
    echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);

?>