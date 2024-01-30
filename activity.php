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

    <!-- activity section starts -->
    <section class="activity-section">
        <div class="activity">
            <div class="activity-head">
                <h1 class="heading">our activities</h1>
                <p class="content">You can see our activites</p>
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

                <div class="img-box">
                    <img src="./images/image 7.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">Enjoy</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 8.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">&</p>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./images/image 9.jpg" alt="">
                    <div class="img-overlaybox">
                        <p class="content">Fun</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- activity section ends -->

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