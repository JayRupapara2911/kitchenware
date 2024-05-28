<?php
session_start();
error_reporting(0);
include('header.php');
include ('admin/configdb.php');

if (isset($_GET['cat'])) {
    $cat=$_GET['cat'];;
    $query = "SELECT * FROM product WHERE cat='$cat'";
    $result = mysqli_query($conn, $query);

}else{
    $result = mysqli_query($conn, "select * FROM product");
}
$result1 = mysqli_query($conn, "select * FROM product");
    $total = mysqli_num_rows($result1);
    $still_result = mysqli_query($conn, "select cat FROM product WHERE cat='still'");
    $still_total = mysqli_num_rows($still_result);

    $plastic_result = mysqli_query($conn, "select cat FROM product WHERE cat='plastic'");
    $plastic_total = mysqli_num_rows($plastic_result);

    $electric_result = mysqli_query($conn, "select cat FROM product WHERE cat='Electric product'");
    $electric_total = mysqli_num_rows($plastic_result);
?>


<!-- Main Content - start -->
<main>
<section class="container">


<ul class="b-crumbs">
	<li>
		<a href="index-2.php">
			Home
		</a>
	</li>
	<li>
		<a href="about.php">
		About
		</a>
	</li>
	
	<li>
		<span>All Product</span>
	</li>
</ul>
<h1 class="main-ttl"><span>All Product</span></h1>
		
<!-- Single Product - end -->

<!-- Related Products - start -->
<div class="prod-related prod2-related">
	<h2><span>Related products</span></h2>
	<div class="prod-related-car" id="prod-related-car">
	<?php echo $_SESSION['productadded']; unset($_SESSION['productadded']); ?><?php echo $_SESSION['productaddedsuccess']; unset($_SESSION['productaddedsuccess']); ?>
		<ul class="slides">
												<li class="prod-rel-wrap">	
                                             
                                              
                                                    
                                                <?php
                                        while ($row = mysqli_fetch_array($result)) 
                                    {?>
                                    

				<div class="prod-rel">
              
				<div class="prod-rel-1"> 
                  
				<div class="prod-rel-2"> 

					<a href="product.php" class="prod-rel-img">
                    <img src="img/<?php echo $row['photo']?>" class="img-fluid" alt="Img">
					</a>
					 <div class="prod-rel-cont">
                          <h4><?php echo $row['name'] ?></h4><br>
                          <h5> ₹<?php echo $row['price']?></h5><br>
                     </div>

						<div class="prod-rel-actions">
							<a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
							<a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
							<p class="prod-i-addwrap">
								<a title="Add to cart" href="add-to-cart.php?id=<?php echo $row['id']; ?>&action=1" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
							</p>
						</div>
					</div>
				</div>
            </div>
                           
                
                <?php } ?>

                
			
<!-- Related Products - end -->

</section>
</main>
<!-- Main Content - end -->

  <!-- End Blog  -->
  <?php include('footer.php'); ?>
