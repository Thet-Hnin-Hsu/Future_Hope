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

    <div class="reglog-container contactus">
        <h1 class="heading">contact us here!</h1>

        <div class="form">
            <!-- Social media -->
            <div class="social-container text-center">
                <h3 class="label">ready to be successful in the future?</h3>
                <button type="submit" class="btn btn-primary">register now</button>
                <div class="social-links">
                    <h3 class="label">social media</h3>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Social media -->

            <div class="border"></div>

            <!--contact starts-->
            <div class="contact-container text-center">
                <h3 class="my-5 label">contact us & register now!</h3>

                <ul class="contact-text list-unstyled mb-0">
                    <li class="mb-3">
                        <a href="#address" class="label">address : no ( 3 ), chan mya yate mon street, bahan township, yangon, myanmar</a>
                    </li>
                    <li class="mb-3">
                        <a href="tel:+00112323980" class="label">phone: +95 9742110221 <br> 01 211 4321</a>
                    </li>
                    <li class="mb-3">
                        <a href="mailto:example@gmail.com" class="label">mail: info@educaremm.com</a>
                    </li>
                </ul>
            </div>
            <!--contact ends-->
        </div>
    </div>
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