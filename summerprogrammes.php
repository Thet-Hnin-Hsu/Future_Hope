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

    <!-- summerprogrammes section starts -->
    <div class="primary1">
        <h1 class="heading">What is our Summer Programmes?</h1>
        <p class="content second">This is a program for kids for both Primary and Secondary course. <br> This program is for our children free time relaxation and aims for become more smart and socialize.</p>

        <div class="primary-content">
            <div class="card new">
                <img src="./images/dancing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Dancing Time</h4>
                    <p class="content card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quidem!</p>
                </div>
            </div>

            <div class="card new">
                <img src="./images/gaming.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Playing  Games</h4>
                    <p class="content card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, repudiandae?</p>
                </div>
            </div>

            <div class="card new">
                <img src="./images/Singing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Singing</h4>
                    <p class="content card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, debitis!</p>
                </div>
            </div>

            <div class="card new">
                <img src="./images/running.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Playing in Field</h4>
                    <p class="content card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, officia.</p>
                </div>
            </div>

            <div class="card new">
                <img src="./images/playing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Playing Indoor</h4>
                    <p class="content card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, atque.</p>
                </div>
            </div>
            
            <div class="card new">
                <img src="./images/picnic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Picnic Time</h4>
                    <p class="content card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusantium.</p>
                </div>
            </div>
        </div>

        <div class="button-group">
            <a href="primary.html" class="btn btn-primary">Go to Primary Course</a>
            <a href="#" class="btn btn-primary">Enroll Now</a>
            <a href="secondary.html" class="btn btn-primary">Go to Secondary Course</a>
        </div>
    </div>
    <!-- summerprogrammes section ends -->

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