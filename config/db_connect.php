<?php

    // connect to the database
 $conn = mysqli_connect('localhost', 'shaun', 'Buyahi.cure7', 'yahi_pizza');

var_dump($conn);
 // check connection
 if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
 }


 

?>