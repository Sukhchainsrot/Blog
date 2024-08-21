<!DOCTYPE html>
<html>
<head>
  <title>Submit Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
    }
    .form-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }
      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color:white;
      background-image: url(banner.png);

    }
    .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 100px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    .card1{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    p{
        font: 20px"Garet Book",sans-serif;
        color:#777777;
    }
    h5{
        font: 30px"Garet Book",sans-serif;

    }
    .btn{
        width: 358px;
        margin-top: 20px;
    }
    .inset{
            margin-left: 379px;
        }
  </style>
</head>
<body><div class="">
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
    
  <div class="container">
    <div class="form-container">
      <h1>Submit Form</h1>
      <form action="user_submit_store.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <!-- <div class="form-group">
          <label for="number">Number:</label>
          <input type="number" class="form-control" id="number" name="number" required>
        </div> -->
        
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-outline-light" name="submit">Submit</button>
      </form>
    </div>
  </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
