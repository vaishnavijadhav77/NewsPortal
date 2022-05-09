<?php
include('includes/connect.php');
if(isset($_POST['submit']))
{
	if($_POST['title']=='' or $_POST['content']=='' or $_POST['author']=='' )
{
	echo("<script>alert('Fill data first')</script>");
	exit();
}	
else
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$feedback = $_POST['feedback'];
$q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$subject', '$feedback' , '$date' , '$time')")or die ("Error");
if(mysqli_query($conn,$query))
	{
		echo "<script>alert('New Post Has Been Inserted')</script>";
        echo "<script>window.open('index.php?view=view','_self')</script>";
	}
	}
}
?>