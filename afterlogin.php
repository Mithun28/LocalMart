<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio Maker</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<body>
    <div class="header">
        <nav>
            <h1> LocalMart</h1>
            <ul>
                <li><a href="afterlogin.php" class="link"> Home</a> </li>
                <li>About </li>
                <li>Contact Us </li>
                <li><img src="pictures/profile_icon.jpg" style="height:20px; width:20px; vertical-align:centre; border-radius:50%;"></li>
            </ul>
        </nav>
    </div>
    <div class="search">
        <p>SEARCH FOR LOCAL BUSINESS
        </p>
        <input placeholder="Search " type="text">
        <div class="dropdown">
            <select class="dropbtn" aria-placeholder="Search By">
            <option value="Location">Location</option>
            <option value="Products">Products</option>
        </select>
        </div>
    </div>
    <div class="make">
        <div class="ani">
            <div id="text"></div>
        <div id="console" class="console-underscore">_</div>
        </div>
        
        <a href="Portfolios/templates.html"><button class="button1">Make Your Own Website </button></a>
        <a href="Portfolios/templates.html"><button class="button2">Check on your website </button></a>
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
