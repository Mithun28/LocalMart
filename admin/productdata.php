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
    <div class="table" style="postion:relative;left:100px; top:50px;">
    <table>
        <tr>
        <div class="th">
            <th> PRODUCT</th>
            <th> NAME </th>
            <th> DESCRIPTION </th>
            <th> PRICE </th>
            <th> TYPE </th>
            <th> COMPANY </th>
        </div>
        </tr>
        <?php
            $sel=mysqli_query($connect,"SELECT * FROM products;");
            if(mysqli_num_rows($sel)>0)
                {
                    while($r=mysqli_fetch_row($sel))
                    {?>
                        <tr>
                            <td><img src="<?php  echo $r[5]?>" width="100px" height="100px"></td>
                            <td><?php        echo $r[1]."<br>"; ?></td>
                            <td><?php        echo $r[2]."<br>"; ?></td>
                            <td><?php        echo $r[3]."<br>"; ?></td>
                            <td><?php        echo $r[4]."<br>"; ?></td>
                            <td><?php
                                $query = "SELECT Business_Name FROM Company_Details WHERE Username = '$r[0]';" ;
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
                        </tr>
                <?php
            }}
            ?>
    </table>
    </div><br><br><br><br><br><br><br><br><br>
</body>
</html>
