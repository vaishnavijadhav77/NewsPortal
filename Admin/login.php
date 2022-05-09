<?php
session_start();
  if(isset($_SESSION['uid']))
  {
	  header('location:index.php');
  }
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	
		<title>Admin Login</title>
		<style>
		 body{ margin: 0 auto;
	  background-image: url("images/bg.jpg");
	  background-repeat: no-repeat;
	  background-size: 100% 720px;
}
.loginform{
	  width: auto;
	  text-align: center;
	  background-color: rgba(52, 73, 94, 0.7);
	  border-radius: 4px;
	  margin: 0 auto;
	  margin-top: 150px;
}
.loginform img{
	  width: 400px;
	  height: 400px;
	  margin-top: -168px;
	  margin-bottom: -130px;
	
}
input[type="text"],input[type="password"]{
	  height: 45px;
	  width: 300px;
	  font-size: 20px;
	  border-radius: 4px;
	  border: none;
	  margin-bottom: 20px;
	  background-color: #fff;
	  padding-left: 30px;
}
.btn-login{
	  padding: 15px 30px;
	  color: #fff;
	  background-color: #2ecc71;
	  border: none;
	  border-radius: 4px;
	  border-bottom: 2px solid;
	  
}
.btn-login:hover{
	background-color: orange;
	cursor:pointer;
	
}
a{
	  color: #fff;
	
}
		
		</style>
</head>

<body>
 <div class="container">
    <div class="row">
	    <div class="col-sm-3">
		</div>
		  <div class="col-sm-6">
		    <div class="loginform">
			<img src="images/men.png" />
			<h1 align="center" style="color:#ffffff">ADMIN LOGIN</h1>
			<form method="post" action="login.php"><!--<form method="post" >-->
				<div class="font-input">
					<input type="text" name="uname" placeholder="Enter Username">
				</div>
				<div class="font-input">
					<input type="password" name="pass" placeholder="Enter Password">
				</div>
				<input type="submit" name="login" value="Login" class="btn-login"><br>
				
			<!--</form>-->
			</div>
			<div class="col-sm-3">
			</div>
			</div>
		</div>
	</form>
</body>
</html>
<?php
include('../includes/connect.php');
if(isset($_POST['login']))
{
	$user_name = $_POST['uname'];
	$password = $_POST['pass'];
	
	$qry="select * from admin_login where username='$user_name' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	
	$row=mysqli_num_rows($result);
	
	if($row < 1)
	{	?>
		<script>
			alert('Wrong');
			window.open('login.php','_self');
		</script> 
<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($result);
		$id=$data['id'];
		echo "id =".$id;
		session_start();
		$_SESSION['uid']=$id;
		header('location:index.php');
	}
}
?>