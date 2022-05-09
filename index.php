<html>
<head><meta charset="UTF-8"></head>
<body>
<?php 
include('header.php');
?>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
<?php
							include('includes/connect.php');
							mysqli_set_charset($conn,'utf8');
							$qry="select * from entertainment_post order by 1 desc limit 04";
							$query=mysqli_query($conn,$qry);

							while($row=mysqli_fetch_array($query))
								{
												$id=$row['id'];
												$title=$row['title'];
												$image=$row['image'];
												$content=substr($row['content'],0,200);
												$date=$row['date'];
?>
												 <div class="single_iteam"><img src="images/<?php echo "$image";?>">
													<div class="slider_article">

													 <h2 class="slider_tittle"><a href="ent_page.php?id=<?php echo "$id";?>"><?php echo "$title";?></a></h2>
	
													<p align="justify"><?php echo"$content";?></p>
													</div>
													</div>

<?php
								}
?>
          
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>नवीनतम बातमी</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
			
            <ul class="latest_postnav">
<?php
			
			include('includes/connect.php');
			mysqli_set_charset($conn,'utf8');
			$qry="select * from entertainment_post order by 1 desc limit 0,5";
			$query=mysqli_query($conn,$qry);

			while($row=mysqli_fetch_array($query))
			{
				$id=$row['id'];
				$title=$row['title'];
				$image=$row['image'];
?>
			<li>
				<div class="media"><a class="media-left" href="ent_page.php?id=<?php echo "$id"; ?>"><img src="images/<?php echo $image ?>"></a>
				<div class="media-body"><a class="catg_title" href="ent_page.php?id=<?php echo "$id"; ?>"><?php echo $title; ?></a></div>
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
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>राजकारण</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
<?php
							include('includes/connect.php');
							mysqli_set_charset($conn,'utf8');	
							$qry="select * from polytics_post order by 1 desc limit 01";
							$query=mysqli_query($conn,$qry);

							while($row=mysqli_fetch_array($query))
								{
												$id=$row['id'];
												$title=$row['title'];
												$image=$row['image'];
												$content=substr($row['content'],0,200);
?>
                <li>
<?php	
			}
?>
                  <figure class="bsbig_fig"> <a class="featured_img" href="poly_page.php?id=<?php echo "$id";?>"> <img alt="" src="images/<?php echo $image?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="poly_page.php?id=<?php echo "$id"; ?>"><?php echo $title=''; "$title"; ?></a> </figcaption>
													<p align="justify"><?php echo $content=''; "$content";?></p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
 <?php
			include('includes/connect.php');
			$today=date('Y-m-d');
			mysqli_set_charset($conn,'utf8');
			$qry="select * from polytics_post order by 1 desc limit 0,5";
			$query=mysqli_query($conn,$qry);

			while($row=mysqli_fetch_array($query))
			{
				$id=$row['id'];
				$title=$row['title'];
				$image=$row['image'];
?>
			<li>
			
				<div class="media wow fadeInDown"> <a  class="media-left" href="poly_page.php?id=<?php echo "$id";?> "><img src="images/<?php echo $image?>"></a>
                    <div class="media-body"> <a class="catg_title" href="poly_page.php?id=<?php echo "$id"; ?>"><?php echo $title; ?></a> </div>
                  </div>
<?php	
			}
?>
		</li>
            </ul>
            </div>
          </div>
   
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>नवीनतम  व्हिडिओ</span></h2>
            <ul class="spost_nav">
 <?php
											include('includes/connect.php');
											mysqli_set_charset($conn,'utf8');
											$query = "select * from entertainment_video order by id desc limit 0,1";
											$res = mysqli_query($conn,$query);
											while($row = mysqli_fetch_assoc($res))
											{
?>      

														 <div class="media wow fadeInDown"><a href="#"><iframe width="335" height="200" src="https://www.youtube.com/embed<?php $link = mysqli_real_escape_string($conn,$row['link']); $nlink = substr($link,16); echo $nlink; ?>" frameborder="0" allowfullscreen></iframe></a>
															</div>
<?php
											}
?>
            </ul>
          </div>
        </aside>      
    </div>

	<div class="col-lg-4 col-md-4 col-sm-4">
	  <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>जाहिराती</span></h2>
              <div class="slick_slider" >
<?php
							include('includes/connect.php');
							mysqli_set_charset($conn,'utf8');
							$qry="select * from ads order by 1 desc limit 04";
							$query=mysqli_query($conn,$qry);

							while($row=mysqli_fetch_array($query))
								{
												$id=$row['id'];
												$title=$row['title'];
												$image=$row['image'];
												
?>
						<div class="single_iteam" style="width:100%;height:200px"><a href="ads.php?id=<?php echo "$id";?> "><img src="images/<?php echo "$image";?>"></a>
													
												</div>	
<?php
								}
?>
          
        </div>
		</div>
		</aside>      
      </div>
  </section>
<?php
include('footer.php');
?>
</body>
</html>