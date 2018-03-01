<?php
$link = mysqli_connect("localhost", "root", "root", "cars");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "INSERT INTO cars (make, model, year, color) VALUES ('Mazda', 'Protege', '2003', 'white')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
