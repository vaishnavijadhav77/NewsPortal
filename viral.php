<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
include('header.php');
?>
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">   
          <div class="single_sidebar">
		    <h2><span>व्हायरल बातमी</span></h2>

            <ul class="spost_nav">
<?php
			include('includes/connect.php');
			mysqli_set_charset($conn,'utf8');
			$qry="select * from viral_post order by 1 desc";
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
          </div>
          </div>
		  </div>
          
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>व्हायरल व्हिडिओ</span></h2>
            <ul class="spost_nav">
<?php
											include('includes/connect.php');
											mysqli_set_charset($conn,'utf8');
											$query = "select * from viral_video order by id desc";
											$res = mysqli_query($conn,$query);
											while($row = mysqli_fetch_assoc($res))
											{
?>      

														 <div class="media wow fadeInDown"><a href="#">
														 	<iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/<?php echo htmlentities($row['link']);?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														 </a>
															</div>
<?php
											}
?>
            </ul>
          </div>
        </aside>      
    </div>
 
    </div>
	
  </section>
<?php
include('footer.php');
?>
</body>
</html>