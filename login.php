<?php
include "db.php";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $qry = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($db_connection, $qry);
    $user = mysqli_fetch_assoc($res);
    $d_email = $user['email'];
    $d_pass = $user['password'];
    // $admin_email = "admin@gmail.com";
    // $admin_password = md5("12345");
    // if ($email === $admin_email && $password === $admin_password) {
    //    header("location:admin.php");
    // }
    if ($email === $d_email && $password === $d_pass) {
        header("location:index.php");
    } else {
        echo "password do not match";
    }
    // echo $d_email;
    // echo $d_pass;
    // print_r($user);
    // print_r($res);
    // exit();
}

include "./layout/header.php";
include "./layout/navbar.php";

?>


    <!-- banner section starts -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/slider1.jpg" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="heading">play, learn & grow</h1>
                    <h3>It take a big heart to shape little minds.<br>Let's us help you.</h3>
                    <div class="btn-gp">
                        <a href="#learnmore" class="btn">learn more <i class="fas fa-arrow-right"></i></a>
                        <a href="#findoutmore" class="btn">find out more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./images/slider2.jpg" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="heading">play, learn & grow</h1>
                    <h3>It take a big heart to shape little minds.<br>Let's us help you.</h3>
                    <div class="btn-gp">
                        <a href="#learnmore" class="btn">learn more <i class="fas fa-arrow-right"></i></a>
                        <a href="#findoutmore" class="btn">find out more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./images/slider3.jpg" class="d-block w-100 img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="heading">play, learn & grow</h1>
                    <h3>It take a big heart to shape little minds.<br>Let's us help you.</h3>
                    <div class="btn-gp">
                        <a href="#learnmore" class="btn">learn more <i class="fas fa-arrow-right"></i></a>
                        <a href="#findoutmore" class="btn">find out more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="button">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- banner section ends -->

    <!-- login section starts -->
    <div class="reglog-container login-container" id="login">
        <h1 class="heading">login here!</h1>

        <form action="" class="form" method="POST">
            <div class="email text-start">
                <label for="email" class="label">email</label><br>
                <input type="email" id="email" name="email" placeholder=" Enter your email">
            </div>

            <div class="password text-start">
                <label for="password" class="label">password</label><br>
                <input type="password" id="password" name="password" placeholder="***********">
            </div>

            <div class="submit text-start">
                <button type="submit" name="submit" value="login" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <!-- login section ends -->

    <?php
    include "./layout/footer.php";

    ?>

    <!-- bootstrap js link -->
    <script src="./js/bootstrap.bundle.min.js"></script>

    <!-- jquery link -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- custom js link -->
    <script src="./js/script.js"></script>

    <!-- custom jquery link -->
    <script src="./js/jquery.js"></script>
    </body>

    </html>