<?php

include("config.php");

$id = $_GET['id'];

$delete = "DELETE from user WHERE id='$id'";
$query_delete = mysqli_query($conn, $delete);

if($query_delete){
    header("location: list.php");
}

?>
