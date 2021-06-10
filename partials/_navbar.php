<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ckn/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#course">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#teacher">Teacher</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="#service">Services</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="#review">Testimonial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#contact">Contact</a>
        </li>';
        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/ckn/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ckn/signup.php">Signup</a>
        </li>';}
        if($loggedin){
        echo   '<li class="nav-item">
          <a class="nav-link" href="/ckn/logout.php">Logout</a>
        </li>';}
      echo '</ul>
    </div>
  </div>
</nav>';
?>