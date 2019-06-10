<?php
    ob_start(); //otwarcie buferu outputowego.
    session_start();

    $timezone = date_default_timezone_set("Europe/Warsaw");

    $con = mysqli_connect('localhost', 'root', '', 'slotify', '3307');
   

    if(mysqli_connect_errno()){
        echo "Failed to connect: " .  mysqli_connect_errno() . mysqli_connect_error();
    }

?>