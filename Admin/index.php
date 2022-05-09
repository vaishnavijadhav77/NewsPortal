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
<title>Admin Dashboard</title>
<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <link rel="stylesheet" type="text/css" href="dashboard_style.css">
		 <link rel="stylesheet" type="text/css" href="font-awesome2.css">
		 <link href="font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	
	
<style>
body{ margin: 0 auto;
	background-color: lightgray;
    font-family: calibri;
	  
    }
img{
	width:100px;
	height:100px;
	align:center;
	margin-left:40px;
	
}
a:visited{
	color:green;
}
td{background-color:white;}
td:hover{
			background-color:lightgray;
		}
.navbar{
	width:100%;
	background-color:rgba(33, 47, 41, 0.9);
	}
ul{
	text-align:left;
	list-style:none;
	padding:0px;
	margin:0;
}
ul li{
	width:198px;
	font-size:18px;
	display:inline-block;
	position:relative;
	padding:12px;
	background-color:rgba(33, 47, 41, 0.9);
	
}
 ul li a{
	 text-decoration:none;
	 padding:25px 20px;
	 color:white;
	 font-size:18px;
	 
 }
 ul li:hover{
	 background-color:red;
	 
 }
 ul li ul{
	 padding:0;
	 position:absolute;
	 top:0px;
	 left:150px;
	 width:230px;
	 display:none;
	 visibility:hidden;
	 
 }
 ul li ul li{
	background-color:rgb(33, 47, 41);
	 display:block;
	 
 }
 ul li ul li:hover{
	 background-color:red;
 }
 ul li:hover ul{
	 display:block;
	 opacity:1;
	 z-index:1;
	 visibility:visible;
 }
 .links > a{color:white;}

 
		 </style>
    </head>
    
<body >
    
    <div class="header" style="padding:25px;font-size:25px;text-align:center;background-color:#343a40!important"><a href="index.php"><h2 style="color:white">Welcome To Admin Dashboard  !!!</h2></a></div>
    <div class="header"><h3 align="center" style="padding:5px;background-color:#e9ecef">Menu Links Top <h3 align="right" ><h3 style="color:red;margin-right:15px"><button onclick="del()" style="font-size:24px;color:red;cursor:pointer">Delete DataBase<span><i class="fas fa-sign-out-alt"></i></span></button></h3></h3></h3></div>
    <h3 align="right" ><a href="logout.php"><h3 style="color:red;margin-right:15px"><button style="font-size:24px;color:red;cursor:pointer">Admin Logout <span><i class="fas fa-sign-out-alt"></i></span></button></h3>
	<div class="row" style="padding:20px">
 <div class="col-sm-2" style="background-color:#212529;padding:10px">
   
   <script language="javascript">
		function del()
		{
			if(confirm("Do you want delete??")){
				window.location.href='delete.php';
				return true;
			}
			else{
				window.location.href='index.php';
			}
			
		}
		</script> 
     <img src="images/men2.png" />
	 <div class=" navbar">
	   <ul>
	      <li class="links"><a href="index.php">Home</a></li>
		  <li class="links"><a href="#">Politics<span><i class="fas fa-caret-right" style="margin-left:10px"></i></span></a>
		     <ul>
			    <li class="links"><a href="index.php?viewpp=viewpp"><span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewpv=viewpv"><span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  
		  </li>
		  <li class="links"><a href="#">Entertainment<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		     <ul>
			    <li class="links"><a href="index.php?viewep=viewep"><span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewev=viewev"><span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  
		  </li>
		  <li class="links"><a href="#">Crime<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewcp=viewcp"><span><i class="fas fa-hand-point-right" style="margin:5px"></i></span> Posts</a></li>
				<li class="links"><a href="index.php?viewcv=viewcv"> <span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="#">Viral<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewvp=viewvp"> <span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewvv=viewvv"><span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="#">Agriculture<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewagp=viewagp"> <span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewagv=viewagv"><span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="#">Health<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewhep=viewhep"> <span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewhev=viewhev"> <span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="#">Real Estate<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewrp=viewrp"> <span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewrv=viewrv"><span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="#">Commercial<span><i class="fas fa-caret-right" style="margin:5px"></i></span></a>
		      <ul>
			    <li class="links"><a href="index.php?viewcop=viewcop"> <span><i class="fas fa-hand-point-right" style="margin:5px"></i></span>Posts</a></li>
				<li class="links"><a href="index.php?viewcov=viewcov"> <span><i class="fas fa-video" style="margin:5px"></i></span>Videos</a></li>
			 
			 </ul>
		  </li>
		  <li class="links"><a href="index.php?viewa=viewa">Ad's</a></li>

	   </ul>
	</div>

 </div>    
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewa']))
        {
?> 
		<div class="col-sm-10" > 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Ad's</h1><h3 align="right" style="color:#3333ff" bgcolor="FF9900"><a href="ads_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  ads order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $date= $row['date'];
?>
 <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
            
     <td><a href="ads_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="ads_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewvp']))
        {
?> 
		<div class="col-sm-10"  style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Viral Posts</h1><h3 align="right" bgcolor="FF9900"><a href="viral_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
 <?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  viral_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="viral_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="viral_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
 <?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewvv']))
        {
 ?> 
	<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Viral Videos</h1><h3 align="right" bgcolor="FF9900"><a href="viral_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
 <?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  viral_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="viral_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="viral_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewpp']))
        {
?> 
		<div class="col-sm-10" style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Polytics Posts</h1><h3 align="right" bgcolor="FF9900"><a href="polytics_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  polytics_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="polytics_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="polytics_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
 ?>             
    </table>
</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewpv']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Polytics Videos</h1><h3 align="right" bgcolor="FF9900"><a href="polytics_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  polytics_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
 <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="polytics_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="polytics_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
 ?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewcp']))
        {
?> 
		<div class="col-sm-10" style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Crime Posts</h1><h3 align="right" bgcolor="FF9900"><a href="crime_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
	</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  crime_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
  
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="crime_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="crime_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewcv']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Crime Videos</h1><h3 align="right" bgcolor="FF9900"><a href="crime_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  crime_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="crime_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="crime_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewep']))
        {
?> 
		<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Entertainment Posts</h1><h3 align="right" bgcolor="FF9900"><a href="ent_insert.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Entertainment Post</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  entertainment_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
 <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="ent_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="ent_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
<?php
include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewev']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Entertainment Videos</h1><h3 align="right" bgcolor="FF9900"><a href="ent_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Entertainment Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  entertainment_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
 <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="ent_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="ent_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
<?php 
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['feedback']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>Feedback</h1><h3 align="right" bgcolor="FF9900">
    
    <tr>
        <th>S.No</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Feedback</th> 
		<th>Date</th>
        <th>By</th>
        <th>Delete</th>                
    </tr>
<?php
        $qry = "select * from  feedback order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $subject= $row['subject'];
                $email= $row['email'];
                $feedback= $row['feedback'];				
                $date= $row['date'];
				$name= $row['name'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $subject;?></td>
  <td><?php echo $email;?></td>
  <td><?php echo $feedback;?></td>
  <td><?php echo $date;?></td>
  <td><?php echo $name;?></td>
     
        <td><a href="feedback_del.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>              
    </table>
	</div>

	<!--Chnage-->
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewcop']))
        {
        ?> 
		<div class="col-sm-10"  style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Commercial Posts</h1><h3 align="right" bgcolor="FF9900"><a href="commertial_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  commertial_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
                ?>
        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="commertial_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="commertial_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewcov']))
        {
?> 
		
		<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Commercial Videos</h1><h3 align="right" bgcolor="FF9900"><a href="commertial_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  commertial_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="commertial_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="commertial_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
 ?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewagp']))
        {
?> 
		<div class="col-sm-10"  style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Agriculture Posts</h1><h3 align="right" bgcolor="FF9900"><a href="agriculture_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
		mysqli_set_charset($conn,'utf8');
        $qry = "select * from  agriculture_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
        
        <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="agriculture_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="agriculture_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
 ?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewagv']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Agriculture Videos</h1><h3 align="right" bgcolor="FF9900"><a href="agriculture_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  agriculture_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
 <tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="agriculture_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="agriculture_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewhep']))
        {
?> 
		<div class="col-sm-10"  style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Health Posts</h1><h3 align="right" bgcolor="FF9900"><a href="health_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  health_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="health_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="health_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewhev']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Health Videos</h1><h3 align="right" bgcolor="FF9900"><a href="health_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  health_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="health_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="health_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewrp']))
        {
?> 
		<div class="col-sm-10"  style="float:right;margin-top:-680px"> 
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="#ff66ff"><h1>View Real Estate Posts</h1><h3 align="right" bgcolor="FF9900"><a href="estate_insert_post.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Post</a></h3>
</td>
	    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Post Title:</th>
        <th>Post Date:</th>
        <th>Post Image</th>
        <th>Post Content:</th>
        <th>Edit Post:</th>
        <th>Delete Post:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  realestate_post order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $image= $row['image'];
                $content= substr($row['content'],0,400);
                $date= $row['date'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $date;?></td>
  <td><center><img src="../images/<?php echo $image;?>" width="50" height="50" /></center></td>
  <td><?php echo $content;?></td>
            
     <td><a href="estate_post_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a id ="delete "href="estate_post_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	
      </div >
<?php
        
        include('../includes/connect.php');
        $i=1;
        if(isset($_GET['viewrv']))
        {
?> 
<div class="col-sm-10" style="float:right;margin-top:-680px">
    <table width="100%" align="center" border="3px">
    <tr>
    <td align="center" colspan="9" bgcolor="FF9900"><h1>View Real Estate Videos</h1><h3 align="right" bgcolor="FF9900"><a href="estate_insert_video.php"><span><i class="fas fa-plus-circle"></i></span>Insert New Video</a></h3></td>
    </tr>
    
    <tr>
        <th>S.No:</th>
        <th>Video Title:</th>
        <th>Video Link:</th>
        <th>Video Description:</th>
        <th>Video date</th> 
        <th>Edit video:</th>
        <th>Delete video:</th>                
    </tr>
<?php
        mysqli_set_charset($conn,'utf8');
		$qry = "select * from  realestate_video order by 1 DESC";  
        $query=mysqli_query($conn,$qry);
            
            while($row=mysqli_fetch_array($query))
            {
                $id= $row['id'];
                $title= $row['title'];
                $link= $row['link'];             
                $descr= $row['descr'];
                $date= $row['date'];
?>
<tr align="center">
  <td><?php echo $i++;?></td>
  <td><?php echo $title;?></td>
  <td><?php echo $link;?></td>
  <td><?php echo $descr;?></td>
  <td><?php echo $date;?></td>
            
     <td><a href="estate_video_edit.php?edit=<?php echo $id;?>">Edit</a></td> 
        <td><a href="estate_video_delete.php?del=<?php echo $id;?>">Delete</a></td>
        </tr>
<?php }
     }
?>             
    </table>
	</div>
	
	<!-- end-->

    </div>      
</div>
<script src="bootstrap.js"></script>
    </body> 
</html>