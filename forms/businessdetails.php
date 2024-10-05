<?php
    include('personal.html');
    session_start();
    $uname=$_SESSION['USR'];
    $businessName = $_POST['business_name'];
    $founderName = $_POST['founder_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $launchDate = $_POST['launch_date'];
    $sponsor = $_POST['sponsor'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $facebookLink = $_POST['facebook_link'];
    $instagramLink = $_POST['instagram_link'];
    $xLink = $_POST['x_link'];
    $about = $_POST['about'];
    $logoPath = '';

    if (isset($_FILES['business_logo'])) {
        $logoName = $_FILES['business_logo']['name'];
        $logoTmpName = $_FILES['business_logo']['tmp_name'];
        $uploadDirectory = "uploads/";
        $logoPath = $uploadDirectory.$logoName;

        if (move_uploaded_file($logoTmpName, $logoPath)) {
            $host = "localhost";
            $user = "root";
            $pwd = "";
            $db = "LocalMart";
            $connect = mysqli_connect($host,$user,$pwd,$db);
            $query = "INSERT INTO company_details
                    VALUES('$uname','$businessName', '$founderName', '$logoPath', '$email', '$phoneNumber', '$launchDate', '$sponsor', '$location', '$address', '$facebookLink', '$instagramLink', '$xLink', '$about')";
            $result = mysqli_query($connect,$query);
            session_start();
            $_SESSION['USR']=$uname;
            header("location:products.html");
            exit;
        } else {
            echo "<p>Error uploading logo.</p>";
        }
    }   
    else{
        echo "<p>issue</p>";
    } 


?>