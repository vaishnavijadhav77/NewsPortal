<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
include('header.php');
?>
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="slick_slider">
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
												$date=$row['date'];
						?>
												 <div class="single_iteam"><img src="images/<?php echo "$image";?>">
													<div class="slider_article">

													 <h2 class="slider_tittle"><?php echo "$title";?></h2>
	
													</div>
													</div>
									<?php
								}
						?>
          
        </div>
      </div>
	  </div>
  </section>

<?php
include('footer.php');
?>


</body>
</html>