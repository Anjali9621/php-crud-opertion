<?php

//Server Name: localhost
//Username: root
//Password: 
//Database Name: crud

$conn = mysqli_connect('localhost', 'root', '', 'crud-php');

if($conn){
    echo '<script>console.log("Connected")</script>';
}
else{
    echo '<script>console.log("Not Connected")</script>';
}

?>