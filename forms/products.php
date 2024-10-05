<?php
    include('products.html');
    session_start();
    $uname=$_SESSION['USR'];
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host, $user, $pwd, $db);


    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get product details from form submission
    $productNames = $_POST['product_name'];  // Array of product names
    $productDescriptions = $_POST['product_description'];  // Array of descriptions
    $productPrices = $_POST['product_price'];  // Array of prices
    $productTypes = $_POST['product_type'];  // Array of product types

    // Check if arrays are present
    if (is_array($productNames)) {
        // Loop through the products
        for ($i = 0; $i < count($productNames) ; $i++) {
            // Initialize an empty path for each product picture
            $picturePath = '';

            // Check if a product picture was uploaded
            if (isset($_FILES['product_picture']['name'][$i]) && $_FILES['product_picture']['name'][$i] != '') {
                $pictureName = $_FILES['product_picture']['name'][$i];
                $pictureTmpName = $_FILES['product_picture']['tmp_name'][$i];
                $uploadDirectory = "uploads/";
                $picturePath = $uploadDirectory . basename($pictureName);

                // Move the uploaded file to the designated directory
                if (move_uploaded_file($pictureTmpName, $picturePath)) {
                    echo "Product picture " . ($i + 1) . " uploaded successfully.<br>";
                } else {
                    echo "Error uploading picture for product " . ($i + 1) . ".<br>";
                }
            }

            // Prepare SQL query to insert the product details into the database
            $query = "INSERT INTO products (Username,Product_Name, Product_Description, Product_Price, Product_Type, Product_Picture) 
                      VALUES ('$uname','$productNames[$i]', '$productDescriptions[$i]', '$productPrices[$i]', '$productTypes[$i]', '$picturePath')";

            // Execute the query
            if (mysqli_query($connect, $query)) {
                echo "Product " . ($i + 1) . " added successfully.<br>";
            } else {
                echo "Error adding product " . ($i + 1) . ": " . mysqli_error($connect) . "<br>";
            }
        }
    } else {
        echo "No products found in the form.";
    }

    // Close the database connection
    mysqli_close($connect);
?>
