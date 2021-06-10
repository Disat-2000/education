<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <!-- google fonts cdn link  -->
       <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>

  </head>
  <body>
 <?php require 'partials/_navbar.php' ?> 

 <section class="home" id="home">

<h1>education from home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum neque aliquid similique error velit placeat vitae accusantium est nam magnam?</p>
<a href="#"><button class="btn">get started</button></a>

<div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<div class="image">
    <img src="images/about.jpg" alt="">
</div>

<div class="content">
    <h3>why choose us?</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam quaerat dolor voluptas nobis voluptates illum? Inventore voluptas dolore voluptates.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex delectus ducimus dignissimos pariatur. Amet sed distinctio earum dolorum nulla, in obcaecati aliquid modi quos magni ducimus culpa nobis laudantium incidunt.</p>
    <a href="#"><button class="btn">learn more</button></a>
</div>

</section>

<!-- about section ends -->

<!-- course section starts  -->

<section class="course" id="course">

<h1 class="heading">our popular courses</h1>    

<div class="box-container">

<div class="box">
    <img src="images/course1.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/front-end-web-development/" target="_blank" class="title">Front-End Web Development</a>
        <p>Get started as a front-end web developer using HTML, CSS, JavaScript, jQuery, and Bootstrap!</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course2.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/software-developer-masterclass/" target="_blank" class="title">BACK-END Development </a>
        <p>This course learn to how to work in website backend.how to store server side perform the website.</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course3.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/ultimate-web/" target="_blank" class="title">FULLSTACK Web Development</a>
        <p>FULLSTACK Web Development- HTML,CSS, JavaScript, PHP,MYSQL with complete one responsive website.</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course4.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/web-development-with-django/" target="_blank" class="title">Web Devlopment with Django Course</a>
        <p>Django is backend python framework to create website and store ths database. today most popular framework is django.</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course5.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/java-programming-complete-beginner-to-advanced/" target="_blank" class="title">JAVA Programming</a>
        <p>Learn Java In This Course And Become a Computer Programmer. Obtain valuable Core Java Skills And Java Certification</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course6.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/android-oreo-kotlin-app-masterclass/" target="_blank" class="title">
Android App Development using Kotlin</a>
        <p>Learn Mobile App Development on Android Platform using Android SDK, Integration with Back End, Sample Projects!</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course7.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/php-for-complete-beginners-includes-msql-object-oriented/" target="_blank" class="title">
        PHP for Beginners </a>
        <p>PHP for Beginners: learn everything you need to become a professional PHP developer with practical exercises & projects.</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 3 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
            <h3> <i class="fas fa-book"></i> 12 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course8.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/master-laravel-6-with-vuejs-fullstack-development/" target="_blank" class="title">
        Laravel Course </a>
        <p>Learn how to build a Single Page Application with Laravel PHP Framework and Vue.js</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 5 months </h3>
            <h3> <i class="fas fa-book"></i> 30 modules </h3>
        </div>
    </div>
</div>

<div class="box">
    <img src="images/course9.jpg" class="img-fluid" alt="">
    
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="https://www.udemy.com/course/nodejs-express-mongodb-bootcamp/" target="_blank" class="title">
        Node Js Course </a>
        <p>Master Node by building a real-world RESTful API and web app (with authentication, Node.js security, payments & more)</p>
        <div class="info">
            <h3> <i class="far fa-clock"></i> 2 hours </h3>
            <h3> <i class="far fa-calendar-alt"></i> 5 months </h3>
            <h3> <i class="fas fa-book"></i> 30 modules </h3>
        </div>
    </div>
</div>

</div>

</section>

<!-- course section ends -->

<!-- teacher section starts  -->

<section class="teacher" id="teacher">

<h1 class="heading">our expert teachers</h1>
<img src="images/teacher.jpg" class="img-fluid" alt="">
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non explicabo tempora modi, reprehenderit ratione sunt ea porro tenetur officiis alias sapiente praesentium voluptas cumque quo maiores dolores totam ex.</p>

<a href="#"><button class="btn">learn more</button></a>

</section>

<!-- teacher section ends -->
<!-- services section start -->
<section id="service">

<h1 class="heading">what we offer?</h1>

<div class="box-container">

  <div class="box" data-aos="flip-up">
    <img src="images/service1.jpg" alt="">
    <div class="info">
      <h2>skilled teachers</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
    </div>
  </div>

  <div class="box" data-aos="flip-down">
    <img src="images/service2.jpg" alt="">
    <div class="info">
      <h2>24x7 hours service</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
    </div>
  </div>

  <div class="box" data-aos="flip-up">
    <img src="images/service3.jpg" alt="">
    <div class="info">
      <h2>certificate distribution</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ad officia quas pariatur error nesciunt consectetur voluptatem minima fugit quo!</p>
    </div>
  </div>

</div>

</section>

<!-- service section ends -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      delay:5000
    });
</script>
<!-- services section end -->
<!-- review section starts  -->

<section id="review" class="review">

<h1 class="heading">students review</h1>
<h3 class="title">what our students says about us</h3>

<div class="box-container">

    <div class="box" data-aos="flip-right">
        <img src="images/r1.jpg" alt="">
        <h3>Nil jain</h3>
        <p>
Very good quality content, I am very happy with Jonas's work! Keep it up and I'll be back if a more advanced course(if that's even possible) is uploaded!This course is more than enough, very well designed (specially the security section).</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>

    <div class="box" data-aos="flip-left">
        <img src="images/r2.jpg" alt="">
        <h3>Bhavesh Patel</h3>
        <p>Perfect coarse you can learn almost everything in here. I would like to add you can ask anything you like even those things not included in coarse and things that has nothing to do with coarse. each and every question is being answered here. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>

    <div class="box" data-aos="flip-right">
        <img src="images/r3.jpg" alt="">
        <h3>Malav Shah</h3>
        <p> I have already completed this coarse and looking forward for react coarse. At last I would like to thanks Jonas and a special thanks to Adam for helping every time i stuck within coarse content or in any other problem in any of my other projects.</p>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>    
        
    </div>

</div>

</section>

<!-- review section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">

<form action="process.php" name="form1" method="POST">
    <input type="text" name="firstname" id="firstname" placeholder="first name" class="box"Required>
    <input type="text" name="lastname" id="lastname" placeholder="last name" class="box" Required>
    <input type="tel" pattern="^\d{10}$" name="phone" id="phone" placeholder="phone number"class="box" Required>
    <input type="email" name="email" id="email" placeholder="your email" class="box"Required>
    <!-- <input type="password" name="password" id="password" class="box" placeholder="your password"> -->
    <textarea name="message" id="message" cols="30" rows="10" class="box address" placeholder="your message"></textarea>
    <br><br>
    <input type="submit" class="btn"value="Submit">
    <!-- <input type="reset" value="Reset" class="btn"> -->
    <!-- <input type="reset" class="btn" value="Reset"> -->
</form>
</div>
</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

<div class="box-container">

    <div class="box">
        <h3>branch locations</h3>
        <a href="#" teaget="_blank">India</a>
        <a href="#" taget="_blank">Gujarat</a>
        <a href="#" target="_blank">Delhi</a>
        <a href="#" target="_blank">Punjab</a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="/miniproject/welcome.php">home</a>
        <a href="#about">about</a>
        <a href="#course">course</a>
        <a href="#teacher">teachers</a>
        <a href="#service">Service</a>
        <a href="#review">Testimonial</a>
        <a href="#contact">contact</a>
    </div>
  
    <div class="box">
        <h3>contact info</h3>
        <p> <i class="fas fa-map-marker-alt"></i> Gujarat, india 400104. </p>
        <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
        <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
    </div>
</div>

<h1 class="credit">created by <a href="#">mr. Disat Boghani</a> all rights reserved. </h1>

</div>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>