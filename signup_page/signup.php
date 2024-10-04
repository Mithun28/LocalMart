<?php
    include('signup.html');
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host,$user,$pwd,$db);

    $query1 = "SELECT * FROM Users WHERE USERNAME LIKE '$uname'";
    $result1 = mysqli_query($connect,$query1);

    if(mysqli_num_rows($result1) == 0){
        if($psw == $psw_repeat)
        {
            $query = "INSERT INTO Users VALUES('$email','$uname','$psw')";
            $result = mysqli_query($connect,$query);
            header("location:../login.html");
            exit;
        }
        else{
            echo "<p> Passwords dont match. </p>";
        }
    }
    else{
        echo "<p> Username already exists. </p>";
    }
?>