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

    <!-- secondary section starts -->
    <div class="primary">
        <h1 class="heading">What is our Secondary course?</h1>
        <p class="content">This is course for who don't have time or want a temporary childcare but we give full support for your children's needs <br> and always watch carefully for your children's safety.
        <br>These lessons will include in our primary package.</p>

        <div class="primary-content">
            <div class="card">
                <img src="./images/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">English Skill</h4>
                    <p class="card-text">English Skill</h4>We train our children to speak English easily and fluently.</p>
                </div>
            </div>

            <div class="card">
                <img src="./images/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">IT Skill</h4>
                    <p class="card-text">Today is IT era.So we also practice our children to use computer and other skills.</p>
                </div>
            </div>

            <div class="card">
                <img src="./images/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Science Skill</h4>
                    <p class="card-text">To become a smart child,science is also need to be learnt.</p>
                </div>
            </div>

            <div class="card">
                <img src="./images/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Math Skill</h4>
                    <p class="card-text">We teach our children to make easy Math like Counting & Calculating.</p>
                </div>
            </div>
        </div>

        <div class="button-group">
            <a href="./primary.html" class="btn btn-primary">Go to Primary Course</a>
            <a href="#" class="btn btn-primary">Enroll Now</a>
            <a href="./summerprogrammes.html" class="btn btn-primary">Go to Summer Programmes</a>
        </div>
    </div>
    <!-- secondary section ends -->

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