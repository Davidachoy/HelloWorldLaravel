<?php
    $conn = mysqli_connect("5500", "root", "", "laravellhelloworld");
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    echo '<h2>Connection was made succesfully</h2>' 
?>
