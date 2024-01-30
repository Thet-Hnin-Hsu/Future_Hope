<?php

include "db.php";
if (isset($_POST['register'])) {
     
    $name = $_POST['name'];
     
    $email = $_POST['email'];
  
    $password = $_POST['password'];
     
    $password = md5($password);
  
   $qry ="INSERT INTO `users`(`name`, `email`,  `password`  ) 
          VALUES ('$name', '$email', '$password' )";
   $res =mysqli_query($db_connection , $qry);
   if (!$res) {
       echo " right user";
    //    header("location:login.php");
   }else {
       echo " register donot exict";
   }

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

    <!-- register section starts -->
    <div class="reglog-container" id="register">
        <h1 class="heading">register here!</h1>

        <form action="" class="form" method="POST">
            <div class="name text-start">
                <label for="name" class="label">Name</label><br>
                <input type="text" id="name" name="name" placeholder="name">
            </div>

            <div class="email text-start">
                <label for="email" class="label">email</label><br>
                <input type="email" id="email" name="email" placeholder="email">
            </div>

            <div class="password text-start">
                <label for="password" class="label">password</label><br>
                <input type="text" id="password" name="password" placeholder="***********">
            </div>
<!-- 
            <div class="choose text-start">
                <label for="subject" class="label">choose subjects...</label><br>
            <select name="subject" id="subject">
                <optgroup label="Language">
                    <option value="english">english</option>
                    <option value="myanmar">myanmar</option>
                    <option value="chinese">chinese</option>
                    <option value="japanese">japanese</option>
                    <option value="spanish">spanish</option>
                    <option value="french">french</option>
                    <option value="german">german</option>
                </optgroup>

                <optgroup label="Art">
                    <option value="piano">piano</option>
                    <option value="guiter">guiter</option>
                    <option value="violin">violin</option>
                    <option value="flute">flute</option>
                    <option value="drum">drum</option>
                    <option value="vocal">vocal</option>
                    <option value="dance">dance</option>
                    <option value="painting">painting</option>
                    <option value="sketching">sketching</option>
                    <option value="creation">creation</option>
                </optgroup>

                <optgroup label="major">
                    <option value="biology">biology</option>
                    <option value="physics">physics</option>
                    <option value="chemistry">chemistry</option>
                    <option value="mathematics">mathematics</option>
                    <option value="zoology">zoology</option>
                    <option value="science">science</option>
                    <option value="computer">computer</option>
                    <option value="IT">IT</option>
                    <option value="engineering">engineering</option>
                    <option value="elementary">elementary</option>
                    <option value="secondary">secondary</option>
                    <option value="primary">primary</option>
                </optgroup>
            </select>
            </div>

            <div class="gender text-start">
                <label for="gender" class="label">choose your gender...</label><br>
                <input type="radio" name="gender" id="gender" value="male"> <span class="label">male</span>
                <input type="radio" name="gender" id="gender" value="female"> <span class="label">female</span>
                <input type="radio" name="gender" id="gender" value="others"> <span class="label">other</span>
            </div>

            <div class="age text-start">
                <label for="age" class="label">your age...</label><br>
                <input type="number">
            </div> -->

            <div class="submit text-start">
                <button type="submit" name="register" value="register" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
    <!-- register section ends -->

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