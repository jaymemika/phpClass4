<?php
$link = mysqli_connect("localhost", "root", "root", "cars");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "UPDATE cars SET year = '2001' WHERE year = '1993'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>