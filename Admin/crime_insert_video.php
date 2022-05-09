<html>
<head>
<meta charset="UTF-8">
<title>Insert New Video</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome2.css">
		 <link href="font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"></link>
    <link href="font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"></link>
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
<div class="header"  style="padding:15px;font-size:25px;text-align:center;background-color:#343a40!important"><h2 style="color:white">Crime Videos</h2></div>
  <div class="header"><h4 align="left" style="padding:5px;background-color:white"><span><i class="fas fa-home" style="margin:5px"></i></span><a href="index.php">Home > <a href="index.php?viewcv=viewcv">All Crime Videos</a><h3 align="right" ><a href="logout.php"><h3 style="color:red;margin-right:15px"><button style="font-size:24px;color:red;cursor:pointer">Admin Logout<span><i class="fas fa-sign-out-alt" style="margin:5px"></i></span></button></h3></a></h4></h3></div>
  <div class="row">
   <div class="col-sm-2" style="background-color:#c7ccd1">
   </div>
   <div class="col-sm-8">
<form action="crime_insert_video.php" method="post" enctype="multipart/form-data">
    <table align="center" border="10" width="100%" style="border-collapse:collapse" class="table-bordered">
    
<tr>
<td colspan="5" align="center" bgcolor="#FFCC66"><h1>Add Video Here.</h1></td>        
</tr>    
        
<tr>
<td align="right"><b>Video Title:</b></td>    
    <td><input type="text" name="title" size="60" /></td>
</tr>  
        
<tr>
<td align="right"><b>Video Link:</b></td>    
    <td><input type="text" name="link" size="60" /></td>
</tr>  
        
<tr>
<td align="right"><b>Video Description:</b></td>    
    <td><textarea name="desc" cols="70" rows="21"></textarea></td>
</tr>          
        
<tr> 
    <td colspan="5" align="center"><input type="submit" name="submit" value="Add Video"  style="cursor:pointer"/></td>
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
 if($_POST['title']=='' or $_POST['link']=='' or $_POST['desc']=='')
 {
    echo("<script>alert('Fill All the Fields.')</script>");
     exit();
 }
 else
 {
	 $id=uniqid();
     $title = $_POST['title'];
     $link = $_POST['link'];
     $desc = $_POST['desc'];
     $date = date('y.m.d');
     
$query = "insert into crime_video(id,title,link,descr,date) values('$id','$title','$link','$desc','$date')";
mysqli_set_charset($conn,'utf8');
    if(mysqli_query($conn,$query)) 
    {
        echo "<script>alert('New Video Has Been Inserted..')</script>";
        echo "<script>window.open('index.php?viewcv=viewcv','_self')</script>";
    }
     
 }
 }
?>
  

    
    
    
    
    
