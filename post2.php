<?php
include "config.php";
$id = $_GET['user_id'];
$sql = "SELECT * FROM `post` Where `user_id` = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <title>
           S.S Blog
        </title>
          
        <!-- add icon link -->
        <link rel = "icon" href = "myimg.png" type = "image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;

        }

        .header {
            background-image: url('path/to/background-image.jpg');
            background-size: cover;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar {
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
            cursor: pointer;
        }

        .navbar li {
            margin-right: 50px;
            margin-left: 60px;
            cursor: pointer;

        }

        .navbar a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #cd1c5d;
        }

        .content {
            padding: 20px;
            margin-left: 750px;
            font-size: 30px;
            margin-top: 200px;
        }

        .content2 {
            margin-left: 600px;
        }

        .imgbody {
            background-image: url(banner.png);
        }

        .btn1 {
            margin-left: 850px;
            margin-bottom: 200px;
        }


        .had {
            position: relative;
            text-align: center;
        }

        .line {
            text-align: center;
            border-top: 6px solid #cd1c5d;
            border-radius: 5px;
            width: 80px;
            margin-left: 885px;
            margin-top: 1px;
            margin-bottom: 40px;
        }

        .ourC {
            color: #cd1c5d;
            text-align: right;
        }

        .ourC1 {
            text-align: right;
        }

        .im {
            margin-left: 800PX;
            margin-top: -268px;
            padding: 5px;
        }

        .logo1 {
            text-align: center;
        }

        .inset {
            border-style: inset;
            text-align: center;
            margin-left: 250px;
            padding: 10px;
        }

        .im {
            position: absolute;
            margin-left: 840px;

            background-image: url('circle.png');
            border-radius: 70%;
        }

        .im::before {
            position: absolute;
            background-position-x: right;

        }
        .card-title{
            color: #cd1c5d;
        } 

        a:link {
            text-decoration: none;
        }

        .smidea {
            margin: 10px;
        }

        .footer {
            background-color: #000000;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }
        p{
        font: 20px"Garet Book",sans-serif;
        color:#777777;
    }
    h5{
        font: 30px"Garet Book",sans-serif;

    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="imgbody">
        <header class="header">
            <div class="navbar">
                <div class="logo">
                    <a href="#"><img src="LOGO..png" alt="Logo"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="dashbord2.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="dashbord2.php">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="content">
            <h1><b>Welcome To Bloge <br> &nbsp;&nbsp;&nbsp; & Content </b></h1>
        </div>
        <div class="btn1">
            <!-- <button type="button" class="btn btn-outline-danger">Get Started</button>
            <button type="button" class="btn btn-outline-danger">Content Us</button> -->
            <h1>&nbsp;</h1>
        </div>
    </div>
    <div class="card">
        <div class="had">
            <h1><i> About Post </i></h1>
        </div>
        <div class="line">

        </div>
        <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <img src="images/<?php echo $row['images']; ?>" alt="" width="200px" class="card-img-top">
                        <div class="card-body">
                            <h1 class="card-title"><?= $row['title']; ?></h1>
                            <p class="card-text"><?= $row['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php    include "sidebare.php" ?>
            </div>
        </div>
    </div>
        <footer class="footer">
            <div class="logo1">
                <div class="col-md-12">
                    <a href="#"><img src="LOGO..png" alt="Logo"></a>
                </div>
            </div>
            <div class="navbar">
                <div class="inset">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="smidea">
                <a href="#">
                    <i class="fa fa-facebook-square" style="font-size:36px;color: #cd1c5d"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                </a>
                <a href="#">
                    <i class="fa fa-google-plus-official" style="font-size:36px;color: #cd1c5d"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                </a>
                <a href="#">
                    <i class="fa fa-instagram" style="font-size:36px;color: #cd1c5d"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                </a>
                <a href="#">
                    <i class="fa fa-youtube-play" style="font-size:36px;color: #cd1c5d;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                </a>

            </div>

            </ul>
            &copy; 2023 Your Company Name. All rights reserved.
        </footer>
</body>

</html>