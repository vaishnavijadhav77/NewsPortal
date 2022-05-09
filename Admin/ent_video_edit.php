<?php
session_start();
		if(isset($_SESSION['uid']))
		{
			echo"";
		}
		else
		{
			header('location:login.php');
		}		
?>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
        <link rel="stylesheet" href="dashboard_style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="font-awesome2.css">
		 <link href="font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<style>
		body{ margin: 0 auto;
	          background-color:lightgray;
			  font-family: calibri;
	 
}
		td{
			background-color: rgba(52, 73, 94, 0.2);
			padding:5px;
		}
		tr:hover{
			background-color:lightgray;
		}
		</style>
    </head>
<body>
    <div class="header" style="padding:20px;font-size:25px;text-align:center;background-color:#343a40!important"><h2 style="color:white">Entertainment Video</h2></div>
    <div class="header" align="left" style="background-color:#FAFEC2;padding:5px;font-size:20px"><span><i class="fas fa-home" style="margin:5px"></i></span><a href="index.php">Home > <a href="index.php?viewpv=viewev">All Entertainment Videos</a></div>
	
    <div class="container"> 
<?php
include('../includes/connect.php');
    
$edit_id = @$_GET['edit'];
$qry = "select * from entertainment_video where id = '$edit_id'";
mysqli_set_charset($conn,'utf8');

    $query=mysqli_query($conn,$qry);
    
while($row=mysqli_fetch_array($query))
{
    $edit_id1 = $row['id'];
    $title = $row['title'];
    $link = $row['link'];
    $descr = $row['descr'];    
    $date = $row['date'];
?>
	<div class="row">
	<div class="col-sm-2">
	</div>
	  <div class="col-sm-8" style="padding:15px">
        <form action="ent_video_edit.php?edit_form=<?php echo $edit_id1; ?>" method="post" enctype="multipart/form-data">
    <table border="10" align="center" style="border-collapse:collapse" class="table-bordered">
        
        <tr>
        <td colspan="5" align="center" bgcolor="#FFCC66"><h1>Edit Video</h1></td>        
        </tr>
        
        <tr>
        <td align="right"><b>Video Title:</b></td>
         <td><input type="text" name="title" size="60" value="<?php echo $title; ?>" /></td>
        </tr>
        
        <tr>
        <td align="right"><b>Video Link:</b></td>
         <td><input type="text" name="link" size="60" value="<?php echo $link; ?>" /></td>
        </tr>
        
        <tr>
        <td align="right"><b>Video Description:</b></td>
         <td><textarea name="descr" cols="62" rows="17"><?php echo $descr; ?></textarea> </td>  
        </tr>
        
        <tr>
        <td colspan="5" align="center"><input type="submit" name="update" value="Update Now"  style="cursor:pointer"/></td>
        </tr>
<?php 
           } 
?>
            
        </table>
    </form>
	</div>
	<div class="col-sm-2">
	</div>
	</div>
	</div>
    </body>
</html>
<?php
  if(isset($_POST['update']))
  {
      $update_id = $_GET['edit_form'];
      $video_title =$_POST['title'];
	  $video_descr =$_POST['descr'];
	  $video_link =$_POST['link'];
      $video_date =date('y-m-d'); 
      
$update_query="update entertainment_video set title = '$video_title', link = '$video_link', descr= '$video_descr', date = '$video_date' where id = '$update_id'";  
      
      if(mysqli_query($conn, $update_query))
      {
          echo"<script>alert('video has Been Updated..')</script>";
          echo"<script>window.open('index.php?viewev=viewev','_self')</script>";
          
      }
      
  }   
?>
</div>