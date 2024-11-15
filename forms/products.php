<?php
    session_start();
    $uname=$_SESSION['USR'];
    include('products.html');
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host, $user, $pwd, $db);


    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $productNames = $_POST['product_name'];  
    $productDescriptions = $_POST['product_description'];  
    $productPrices = $_POST['product_price'];  
    $productTypes = $_POST['product_type'];  

    if (is_array($productNames)) {
        for ($i = 0; $i < count($productNames) ; $i++) {
            $picturePath = '';

            if (isset($_FILES['product_picture']['name'][$i]) && $_FILES['product_picture']['name'][$i] != '') {
                $pictureName = $_FILES['product_picture']['name'][$i];
                $pictureTmpName = $_FILES['product_picture']['tmp_name'][$i];
                $uploadDirectory = "uploads/";
                $picturePath = $uploadDirectory . basename($pictureName);

                if (move_uploaded_file($pictureTmpName, $picturePath)) {
                    echo "Product picture " . ($i + 1) . " uploaded successfully.<br>";
                } else {
                    echo "Error uploading picture for product " . ($i + 1) . ".<br>";
                }
            }

            $query = "INSERT INTO products (Username,Product_Name, Product_Description, Product_Price, Product_Type, Product_Picture) 
                      VALUES ('$uname','$productNames[$i]', '$productDescriptions[$i]', '$productPrices[$i]', '$productTypes[$i]', '$picturePath')";

            if (mysqli_query($connect, $query)) {
                echo "Product " . ($i + 1) . " added successfully.<br>";
            } else {
                echo "Error adding product " . ($i + 1) . ": " . mysqli_error($connect) . "<br>";
            }
        }
    } else {
        echo "No products found in the form.";
    }

    mysqli_close($connect);
?>
