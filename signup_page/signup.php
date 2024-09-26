<?php
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host,$user,$pwd,$db);
    $query = "INSERT INTO Users VALUES('$email','$uname','$psw')";
    $result = mysqli_query($connect,$query);
?>