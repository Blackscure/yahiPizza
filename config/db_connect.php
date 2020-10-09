<?php

    // connect to the database
 $conn = mysqli_connect('localhost', 'wekesa', 'Buyahi.cure7', 'yahi_pizza');

var_dump($conn);
 // check connection
 if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
 }


 if($conn){
     echo 'DB connected';
 }

?>