<?php
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

    <!-- about us section starts -->
    <section class="about">
        <div class="about-container">
            <div class="about-content">
                <h1 class="heading">about us</h1>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus soluta dolor porro deserunt exercitationem provident, autem qui eius laborum nostrum, amet est reiciendis non reprehenderit optio repudiandae officia architecto.</p>
                <a href="./aboutus.php" class="btn">read more <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="about-img"><img src="./images/About Us.jpg" alt=""></div>
        </div>
    </section>
    <!-- about us section ends -->

    <!-- course section starts -->
    <section class="course">
        <div class="course-section">
            <div class="course-head">
                <h1 class="heading">Our Course</h1>
                <p class="content">This is our <br> Customers' Favourite Courses we supply</p>
            </div>

            <div class="course-content row d-flex justify-content-around align-items-center px-0 mx-0">

                <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="./images/pexels-alexander-dummer-1912868.jpg" alt="">
                    <div class="box-overlay">
                        <h3>primary</h3>
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                        <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">
                                time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                        <button type="button" class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>

                <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="./images/pexels-naomi-shi-1001914.jpg" alt="">
                    <div class="box-overlay">
                        <h3>secondary</h3>
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                        <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">
                                time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                        <button type="button" class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>

                <div class="box col-lg-4 col-md-4 col-sm-12 text-center">
                    <img src="./images/pexels-samer-daboul-1815257.jpg" alt="">
                    <div class="box-overlay">
                        <h3>summer programmes</h3>
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, libero!</p>

                        <p class="content"><span class="highlight">age</span>:3-5 years,<span class="highlight">
                                time</span>:8-10 AM,<span class="highlight"> Seat</span>:25</p>
                        <button type="button" class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course section ends -->

    <!-- stats section starts -->
    <section class="stats">
        <div class="statistic">
            <div class="stat-head">
                <img src="./images/logo.png" alt="...">
                <p class="content">You can see our Statistics' rate here</p>
            </div>
            <div class="wrapper">
                <div class="container">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="num" data-val="1200">0000</span>
                    <span class="text">students</span>
                </div>
                <div class="container">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="num" data-val="150">000</span>
                    <span class="text">teachers</span>
                </div>
                <div class="container">
                    <i class="fas fa-users"></i>
                    <span class="num" data-val="60">00</span>
                    <span class="text">classroom</span>
                </div>
                <div class="container">
                    <i class="fas fa-bus"></i>
                    <span class="num" data-val="50">00</span>
                    <span class="text">bus</span>
                </div>
            </div>
        </div>
    </section>
    <!-- stats section ends -->

    <!-- activity section starts -->
    <section class="activity-section">
        <div class="activity">
            <div class="activity-head">
                <h1 class="heading">our activities</h1>
                <p class="content">We hold many activities to make our children grow happily and smart</p>
            </div>

            <div class="pic-box">
                <div class="img-box">
                    <img src="./images/image 1.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">We</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 2.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">Love</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 3.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">Attending</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 4.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">Our</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 5.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">School</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 6.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content"><i class="fas fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- activity section ends -->

    <!-- subscribe section starts -->
    <div class="subscribe">
        <label for="email">do you want to know get update <br> what's upcoming?</label>
        <input type="email" name="email" id="" placeholder="email address">
        <button type="button" class="btn">Subscribe Now!</button>
    </div>
    <!-- subscribe section end -->


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