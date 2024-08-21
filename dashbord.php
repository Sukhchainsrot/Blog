<?php
include "config.php";
$pagination = 2;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $pagination;
if (isset($_POST['submit'])) {
    $search = trim($_POST['search']);
    $sql = "SELECT * FROM `posts` WHERE `title` LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM `posts` WHERE `deleted_at`='0'  LIMIT  $start_from,$pagination";
}

$result = mysqli_query($conn, $sql);
if ($row = $result->fetch_assoc()) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>S.S.Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>

        </style>
    </head>

    <body>
        <?php include "navbar.php";  ?>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        $sql = "SELECT * FROM `posts`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="card mb-4">
                                <img src="images/<?php echo $row['images']; ?>" alt="" width="200px" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['title']; ?></h5>
                                    <p class="card-text text-truncate"><?= substr($row['content'], 0, 70); ?>.....</p>
                                    <p class="card-text">Posted on:-<?= date("d-m-y h:i:sa", strtotime($row['created_at'])); ?></p>
                                    <a href="post.php?id=<?= $row['id'] ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "Such a no recored";
                    }
                    ?>
                    </div>
                    <?php include "sidebare.php"; ?>
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">

                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item disabled">
                                    <?php
                                    $sql1 = "SELECT * FROM `posts`";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $totalrecord = mysqli_num_rows($result1);
                                    $totalpage = ceil($totalrecord / $pagination);



                                    for ($btn = 1; $btn <= $totalpage; $btn++) {
                                        echo "<a href='dashbord.php?page=" . $btn . "'>
        <button class='btn btn-primary mx-2'>" . $btn . "</button>
        </a>";
                                    }

                                    ?>

                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>


        <?php include "footer.php"; ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>