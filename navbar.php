<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color:#161E31 !important">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://bdjobwar.com/frontEnd-assets/img/logo.png" alt="" width="100" height="50" style="object-fit:cover">
    </a>
    <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto" style="font-size: 14px;">
        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" aria-current="page" href="index.php">হোম</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" href="https://bdjobwar.com#live-section">লাইভ সেকশন</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" href="https://bdjobwar.com#courses">কোর্স সমূহ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" href="https://bdjobwar.com#package">প্যাকেজসমূহ </a>
        </li>



        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" href="https://bdjobwar.com/jobsolutions">জব সলিউশন</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 13px;" href="#">বুক স্টোর</a>
        </li>
      </ul>

<?php

      if (!isset($_SESSION['is_user_logged_in'])) {

?>

<ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login.php">লগইন</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"> রেজিস্ট্রেশন </a>
        </li>


      </ul>

<?php } ?>


      


      <?php
      // if user  logg in:  

      if (isset($_SESSION['is_user_logged_in'])) {

      ?>

<ul class="navbar-nav mb-2 mb-lg-0">

<li class="dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <?php if (isset($_SESSION['user_name'])) {

echo $_SESSION['user_name'];

  }

?>



  </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
    <li><a class="dropdown-item" href="https://bdjobwar.com/dashboard/home">ড্যাশবোর্ড</a></li>

    <li><a class="dropdown-item" href="https://bdjobwar.com/dashboard/courses">আপনার কোর্সসমূহ</a></li>
    <li>
      <!-- <a class="dropdown-item" href="#">Logout</a> -->
      <a class="dropdown-item" href="https://bdjobwar.com/logout" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
        <span class=" mr-3"></span>লগ আউট</a>
      <form id="logout-form" action="logout.php" method="POST" class="d-none">
        <input type="hidden" name="_token" value="0cd5Olf5uXXUUCRzt39DkjDnW8bnujIvFs1YHSyV">
      </form </li>

  </ul>


      <?php } ?>
      


    </div>
  </div>
</nav>