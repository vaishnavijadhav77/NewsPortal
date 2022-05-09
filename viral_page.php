<html>
<head><meta charset="UTF-8"></head>
<body>
<?php 
include('header.php');
?>
<?php
include('includes/connect.php');
$page_id=$_GET['id'];
mysqli_set_charset($conn,'utf8');
$qry="select * from viral_post where id='$page_id'";
$query=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($query))
{	
	$id=$row['id'];
	$title=$row['title'];
	$image=$row['image'];
	$content=$row['content'];
	$date=$row['date'];?>
	
	<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
	<div class="header_bottom">

	<h2><?php echo "$title";?></h2>
	<p>Published On:&nbsp; &nbsp;<b><?php echo "$date";?></b></p>
	<center><img src="images/<?php echo "$image";?>" width="100%" height="400"></center>
	<p align="justify"><?php echo"$content";?></p>
	</div>
	</div>
	</div>
<?php
	}
?>
 <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
			
            <ul class="latest_postnav">
			<?php
			include('includes/connect.php');
			mysqli_set_charset($conn,'utf8');
			$qry="select * from viral_post order by 1 desc limit 0,5";
			$query=mysqli_query($conn,$qry);

			while($row=mysqli_fetch_array($query))
			{
				$id=$row['id'];
				$title=$row['title'];
				$image=$row['image'];
			?>
			<li>
				<div class="media"><a class="media-left" href="viral_page.php?id=<?php echo "$id"; ?>"><img src="images/<?php echo $image ?>"></a>
				<div class="media-body"><a class="catg_title" href="viral_page.php?id=<?php echo "$id"; ?>"><?php echo $title; ?></a></div>
				</div>
<?php	
			}
?>
			</li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
<?php
include('footer.php');
?>
</body>
</html>
