<?php
	session_start();
	include ('admin/configdb.php');

if (isset($_POST['registration'])) {

	$uname = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pass'];
	$cpwd = $_POST['cpass'];
	$mnum = $_POST['mnum'];
	$adrs = $_POST['address'];

	$query= "INSERT INTO register(unm, email, pass, cpass, no, address)VALUES('$uname','$email', '$pwd', '$cpwd', '$mnum', '$adrs')";
	$res= mysqli_query($conn, $query);
	if($res)
	{
		header("location:login.php");
	}
}
	

else if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$qry= "SELECT * FROM register where email='$email' and pass='$pwd'";
	$res= mysqli_query($conn, $qry);
	$row= mysqli_num_rows($res);

	if ($row==0) {
		$_SESSION['wrong']="Email or Password is Wrong";
		header("location:login.php");
	}
	else{
		$_SESSION['login'] = mysqli_fetch_assoc($res);
		header("location:index-2.php");
	}


}
else if (isset($_POST['update'])) {
	extract($_POST);
	$query= "UPDATE customer SET c_address ='$adrs' WHERE c_id='$id'";
	mysqli_query($conn, $query);
	$_SESSION['updated'] = "Address Successfully Updated";
	$_SESSION['login']['c_address'] = "$adrs";
	header("location:my-account.php");
}
else if (isset($_POST['feedback'])) {
	extract($_POST);

	$yourname = $_POST['fname'];
	$yourmail = $_POST['email'];
	$yourmsg = $_POST['message'];
	

	$query= "INSERT INTO feedback(fname, email,  message) VALUES('$yourname','$yourmail',  '$yourmsg')";
	mysqli_query($conn, $query);
	$_SESSION['contactus'] = "Your Message Successfully Sent. Thank You!";
	header("location:contacts.php");
}
?>