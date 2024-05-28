<?php
session_start();
error_reporting(0);
include('header.php'); 
?>

<!-- Main Content - start -->
<main>
<section class="container stylization maincont">

<?php echo $_SESSION['Success']; unset($_SESSION['Success']); ?>
<ul class="b-crumbs">
    <li>
        <a href="index-2.php">
            Home
        </a>
    </li>
    <li>
        <span> Login</span>
    </li>
</ul>
<h1 class="main-ttl"><span>Login</span></h1>
<div class="auth-wrap">
    <div class="auth-col">
        <h2>Login</h2>
        <form action="user-process.php" method="post" class="login">
            <label for="username" class="text-info">Email:</label><br>
            <input type="email" name="email" id="username" class="form-control" required><br><br>
            
            <div class="form-group">
                 <label for="password" class="text-info">Password:</label><br>
                <input type="password" name="pwd" id="password" class="form-control" required>
                <div for="username" class="text-info-warning"><?php echo $_SESSION['wrong']; unset($_SESSION['wrong']); ?></div>
            </div>
		                            
            <p class="auth-submit">
                <input type="submit" value="Login" name="login">
                <input type="checkbox" id="rememberme" value="forever">
                <label for="rememberme">Remember me</label>
            </p>
            <p class="auth-lost_password">
                <a href="#">Lost your password?</a>
            </p>
        </form>
    </div>
</div>



</section>
</main>
<!-- Main Content - end -->

  <!-- End Blog  -->
  <?php include('footer.php'); ?>
  