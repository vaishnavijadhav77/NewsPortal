<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Insert New Post</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome2.css">
		 <link href="font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<style>
body{ margin: 0 auto;
	  background-color: rgba(52, 73, 94, 0.1);
	  font-family: calibri;
	 
}
td{
			background-color:rgba(33, 47, 41, 0.3);
			padding:5px;
		}
		tr:hover{
			background-color:lightgray;
		
		}
</style>
</head>

<body>
<div class="container">
<div class="header"  style="padding:15px;font-size:25px;text-align:center;background-color:#343a40!important"><h2 style="color:white">Viral Posts</h2></div>
  <div class="header"><h4 align="left" style="padding:5px;background-color:white"><span><i class="fas fa-home" style="margin:5px"></i></span><a href="index.php">Home > <a href="index.php?viewvp=viewvp">All Viral Posts</a><h3 align="right" ><a href="logout.php"><h3 style="color:red;margin-right:15px"><button style="font-size:24px;color:red;cursor:pointer">Admin Logout <span><i class="fas fa-sign-out-alt"></i></button></h3></a></h4></h3></div>
  <div class="row">
   <div class="col-sm-2" style="background-color:#c7ccd1">
   </div>
   <div class="col-sm-8" style="padding:10px">


<form action="viral_insert_post.php" method="POST" enctype="multipart/form-data">
<table align="center" border="10" width="100%" class="table-bordered" >
<tr>
<td colspan="5" align="center" bgcolor="#FFCC66"><h1>Insert new post here</h1></td>
</tr>


<tr>
<td align="right"><b>Post Title:</b></td>
<td><input type="text" name="title" size="50"></td>
</tr>

<tr>
<td align="right"><b>Image:</b></td>
<td><input type="file" name="image" size="50"></td>
</tr>

<tr>
<td align="right"><b>Post Content:</b></td>
<td><textarea name="content" cols="70" rows="21"></textarea></td>
</tr>
	
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="Insert Post" style="cursor:pointer" ></td>
</tr>	
    </table>
</form>
</div>
<div class="col-sm-2" style="background-color:#c7ccd1">
</div>
</div>
</div>
</body>
</html>
<?php
include("../includes/connect.php");
if(isset($_POST['submit']))
{
if($_POST['title']=='' or $_POST['content']=='')
{
	echo("<script>alert('Fill data first')</script>");
	exit();
}	
else
{	$id=uniqid();
	$title=$_POST['title'];
	$content=$_POST['content'];
	$img_name=$_FILES['image']['name'];
	$img_type=$_FILES['image']['type'];
	$img_size=$_FILES['image']['size'];
	$img_tmp=$_FILES['image']['tmp_name'];
	$date=date('y.m.d');
	
	if($img_type=="image/jpeg" or $img_type=="image/jpg" or $img_type=="image/png" or $img_type=="image/gif" )
	{
		if($img_size<=1000000)
		{
			move_uploaded_file($img_tmp,"../images/$img_name");
		}
		else
		{
			echo("<script>alert('Larger Image')</script>");
		}
	}
	
	else
	{
		echo("<script>alert('Invalid File type.')</script>");
	}
	
	$query="INSERT INTO `viral_post`(`id`, `title`, `image`, `content`, `date`) VALUES ('$id','$title','$img_name','$content','$date')";
		mysqli_set_charset($conn,'utf8');

	if(mysqli_query($conn,$query))
	{
		echo "<script>alert('New Post Has Been Inserted')</script>";
        echo "<script>window.open('index.php?viewvp=viewvp','_self')</script>";
	}
	
	
}	
}
?>