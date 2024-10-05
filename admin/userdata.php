<?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "LocalMart";
    $connect = mysqli_connect($host,$user,$pwd,$db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LocalMart</title>
    <link rel="stylesheet" href="adminpage.css">
    
</head>
<body>
    <div class="header">
        <nav>
            <h1> LocalMart</h1>
            <ul>
                <li><a href="adminpage.html" class="link"> Home</a> </li>
                <li>About </li>
                <li>Contact Us </li>
                <li><img src="../pictures/profile_icon.jpg" style="height:20px; width:20px; vertical-align:centre; border-radius:50%;"></li>
            </ul>
        </nav>
    </div>
    <div class="table">
        <table>
            <tr>
            <div class="th">
                <th> USER NAME </th>
                <th> EMAIL ID </th>
                <th> COMPANY </th>
                <th> NUMBER OF PRODUCTS </th>
            </div>
            </tr>
            <?php
                $sel=mysqli_query($connect,"SELECT * FROM companies;");
                if(mysqli_num_rows($sel)>0)
                    {
                        while($r=mysqli_fetch_row($sel))
                        {
                            if($r[1]!='admin')
                            {?>
                            <tr>
                                <td><?php        echo $r[1]."<br>"; ?></td>
                                <td><?php        echo $r[0]."<br>"; ?></td>
                                <td><?php
                                    $query = "SELECT Business_Name FROM Company_Details WHERE Username = '$r[1]';" ;
                                    $result = mysqli_query($connect,$query);
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        while($c = mysqli_fetch_row($result)){
                                            echo $c[0]."<br>";
                                        }
                                    }   
                                    else{
                                        echo "-";
                                    }    
                                ?></td>
                                <td><?php        $query = "SELECT COUNT(*) FROM products WHERE Username = '$r[1]';" ;
                                    $result = mysqli_query($connect,$query);
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        while($c = mysqli_fetch_row($result)){
                                            echo $c[0]."<br>";
                                        }
                                    }   
                                    else{
                                        echo "-";
                                    } ?></td>
                            </tr>
                    <?php
                }}}
                ?>
        </table>
    </div>
    <div class="footer">
            <div class="column1">
                <h2>-About us-</h2>
                <p>Our website introduces an innovative e-commerce platform designed to support local businesses, especially in rural areas, while being accessible to everyone. Our platform seamlessly integrates business profiles with e-commerce capabilities, allowing individuals without technical knowledge to easily create an online store for their businesses.
                     <br><br><br></p>
                
            </div>
            <div class="column2">
                <h2>-Contact Us-</h2>
                <p>Address: Chennai, Tamil Nadu<br>
                Mail: localmart@gmail.com<br>
                Phone Number: +91 00000 00000<br>
                                  <br></p>
            </div>
            <div class="column3">
                <h2>-Socials-</h2>
                <div>
                    <p><a href="https://github.com/Mithun28/portfolio-maker/tree/main/Portfolios" class="fa fa-github"></a>
                <a href="www.portmakers@instagram.com" class="fa fa-instagram"></a>
                <a href="www.linkedin.com" class="fa fa-linkedin"></a>
                                  </p>
                </div>
            </div>
    </div>
    <script src="home.js"></script>
</body>
</html>
