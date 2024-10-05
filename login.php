<?php
    include('login.html');
    $uname = $_POST['username'];
    $psw = $_POST['pswrd'];

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host,$user,$pwd,$db);

    $query1 = "SELECT * FROM Companies WHERE USERNAME LIKE '$uname' AND PASSWORD LIKE '$psw'";
    $result1 = mysqli_query($connect,$query1);

    if(mysqli_num_rows($result1) > 0){
        session_start();
        $_SESSION['USR']=$uname;
        if($uname == 'admin'){
            header("location:admin/adminpage.html");
            exit;
        }
        else{
            header("location:afterlogin.php");
            exit;
        }
    }
?>