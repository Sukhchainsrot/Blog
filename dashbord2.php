
<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>
           S.S Blog
        </title>
          
        <!-- add icon link -->
        <link rel = "icon" href = "myimg.png" type = "image/x-icon">

  <style>
      .a{
      width: 100%;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color:white;

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
    .navbar a:hover{
        color:#cd1c5d;
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
    .imgbody{
        background-image: url(banner.png);
    }
    .btn1{
        margin-left: 850px;
        margin-bottom: 200px;
    }
    
   
    .had {
  position: relative;
  text-align: center;
}
.line{
    text-align: center;
  border-top: 6px solid #cd1c5d;
  border-radius: 5px;
  width: 80px;
  margin-left: 885px;
  margin-top: 1px;
  margin-bottom: 40px;
}
.ourC{
    color: #cd1c5d;
    text-align: right;
}
.ourC1{
    text-align: right;
    margin-bottom: 50px;
    margin-top: 50px;
}
.im{
    margin-left: 800PX;
    margin-top: -268px;
    padding: 5px;
}
.logo1{
    text-align: center;
}
.inset{
    border-style: inset;
    text-align: center;
    margin-left: 250px;
    padding: 10px;
}
.im{
    position:absolute;
    margin-left: 840px;
    
    background-image:url('circle.png') ;
    border-radius: 70%;
}
.im::before{
    position: absolute;
    background-position-x: right; 

}
a:link {
        text-decoration: none;
    }
.smidea{
        margin: 10px;
}
    
.footer {
      background-color: #000000;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }
    .col-md-5{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    p{
        font: 20px"Garet Book",sans-serif;
        color:#777777;
    }
    h5{
        font: 30px"Garet Book",sans-serif;
        text-align: center;
        color: #cd1c5d;

    }
    .inset{
            margin-left: 400px;
        }
        .card1{
          margin-left: 450px;
          padding:20px;
          padding-left: 170px;
        }
        .column {
  float: left;
  width: 50%;
  padding: 0 10px;
}
* {
  box-sizing: border-box;
}



.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.card {
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.card-title{
  color: #cd1c5d;
}
.search{
  text-align: center;
}
.center{
  margin-left: 70px;
}
        
  </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
    <div class="imgbody">
  <header class="header">
    <div class="navbar">
      <div class="logo">
        <a href="#"><img src="LOGO..png" alt="Logo"></a>
      </div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="user_submit.php">Create New Account</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </nav>
    </div>
  </header>
  <div class="search">
  <form class="example" action="" method="post">
  <input type="text" class="" placeholder="Search.." name="search">
  <button name="submit" type="submit" class="btn btn-outline-light"><i class="fa fa-search"></i></button>
</form>
  </div>
  
  <div class="content">
    <div class="center">
      <div class="col-md-12">
     <a  style="color:#fff" href="create.php"> <button class="btn btn-outline-light">ADD BLOG</button> </a> </div></div>
    </div>
  
  <div class="btn1">
  </div>
  <h1>&nbsp;</h1>
</div>
<div class="card">
  <div class="had"><h1><i>Blog Index </i></h1> </div>
  <div class="line">
      
</div>
<div class="row">
<?php
                        $sql = "SELECT * FROM post";
                        $result = mysqli_query($conn, $sql);
                        if($result -> num_rows > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                          ?>
  <div class="column">
    <div class="card">
                    <h5  class="card-title"><?= $row['title']; ?></h5>
                 <a href="post2.php?user_id=<?= $row['user_id'] ?>" style="color:black;">
                     <p class="card-text text-truncate"><?= $row['content']?></p>
                     <img class="a" src="images/<?php echo $row['images'];?>" alt="" >
                    </a>
                    
         </div> <br><br>
    </div>
    <?php
                        }
                    }
                     ?>
    </div>
         <?php # include "sidebare.php" ?> 
<footer class="footer">
      <div class="logo1">
          <div class="col-md-12">
        <a href="#"><img src="LOGO..png" alt="Logo"></a></div>
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
  <i class="fa fa-google-plus-official"style="font-size:36px;color: #cd1c5d"></i>&nbsp;&nbsp;&nbsp;&nbsp;
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
