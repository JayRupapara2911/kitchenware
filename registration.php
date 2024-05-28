<?php
session_start();
error_reporting(0);
include('header.php'); 
?>

<!-- Main Content - start -->
<main>
<section class="container stylization maincont">


<ul class="b-crumbs">
    <li>
        <a href="index-2.php">
           Home
        </a>
    </li>
    <li>
        <span> Register</span>
    </li>
</ul>

<div class="auth-col">
    <h2>Register</h2>
    <form action="user-process.php" method="post" class="register">
        <label for="username" class="text-info">Username:</label><br>
        <input type="text" name="username" id="username" class="form-control">
        <div for="username" class="text-info-warning"><?php echo $_SESSION['error']['uname']; unset($_SESSION['error']['uname']); ?></div><br>

        <label for="username" class="text-info">Email:</label><br>
        <input type="email" name="email" id="username" class="form-control">
        <div for="username" class="text-info-warning"><?php echo $_SESSION['error']['email']; unset($_SESSION['error']['email']); ?></div><br>

        <label for="password" class="text-info">Password:</label><br>
        <input type="password" name="pass" id="password" class="form-control">
        <div for="username" class="text-info-warning"><?php echo $_SESSION['error']['pwd']; unset($_SESSION['error']['pwd']); ?></div><br>

        <label for="password" class="text-info">Confirm Password:</label><br>
        <input type="password" name="cpass" id="password" class="form-control"><br>

        <label for="password" class="text-info">Contact Number:</label><br>
        <input type="text" name="mnum" id="password" class="form-control" maxlength="10" minlength="10">
        <div for="username" class="text-info-warning"><?php echo $_SESSION['error']['mnum']; unset($_SESSION['error']['mnum']); ?></div><br>
        
        <label for="password" class="text-info">Shipping/Delivery Address:</label><br>
        <textarea class="form-control" name="address"></textarea>
        <div for="username" class="text-info-warning"><?php echo $_SESSION['error']['adrs']; unset($_SESSION['error']['adrs']); ?></div><br>
        
        <p class="auth-submit">
        <input type="submit" name="registration" class="btn btn-info btn-md" value="registration">
        </p>
    </form>
</div>






</section>
</main>
<!-- Main Content - end -->

  <!-- End Blog  -->
  <?php include('footer.php'); ?>
  