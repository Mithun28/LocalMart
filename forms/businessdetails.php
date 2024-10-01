<?php
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
        $logoFile = $_FILES['business_logo'];
        $logoName = $logoFile['name'];
        $logoTmpName = $logoFile['tmp_name'];
        $uploadDirectory = "uploads/";
        $logoPath = $uploadDirectory . $logoName;

        if (move_uploaded_file($logoTmpName, $logoPath)) {
            echo "Business logo uploaded successfully.";
        } else {
            echo "Error uploading logo.";
        }
    }    

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host,$user,$pwd,$db);
    $query = "INSERT INTO business_details
            VALUES('$businessName', '$founderName', '$logoPath', '$email', '$phoneNumber', '$launchDate', '$sponsor', '$location', '$address', '$facebookLink', '$instagramLink', '$xLink', '$about')";
    $result = mysqli_query($connect,$query);
?>