<?php
include "config.php";
$id = $_GET['user_id'];
$sql = "SELECT * FROM `post` Where user_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>  <title>
           S.S Blog
        </title>
          
        <!-- add icon link -->
        <link rel = "icon" href = "myimg.png" type = "image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashbord2.php" class="btn btn-primary">Home</a>
                    <a href="dashbord2.php?id = <?php $row['user_id']; ?>"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <img src="images/<?php echo $row['images']; ?>" alt="" width="200px" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['title']; ?></h5>
                            <p class="card-text"><?= $row['content']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            Sidebar
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sidebar Title</h5>
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
                            <p class="card-text">Sidebar Content</p>
                            <a href="#" class="btn btn-primary">Go Somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p> © ds2023 My Blog. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>