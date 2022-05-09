<!DOCTYPE html>
<html>
<head>
<title>Maharashtra Maza</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
 <style>
 .searchbox{
	 
	 margin-left:8px;
	 
 }
 .searchbox input[type="text"]{
	 margin-top:8px;
	 
	 border-radius:10px;
	 background-color:white;
	 padding:5px;
	 
 }
 .searchbox input[type="text"]:hover{
	 background-color:white;
	 
 }
 
 .searchbox button{
	 padding:5px;
	 border-radius:5px;
	 margin-left:10px;
	 background-color:#d083cf;
	 color:white;
 }
 .searchbox button:hover{
	 background-color:orange;
 }
 </style>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

<div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
		     <p align="left"><b>Today is: &nbsp;&nbsp; </b>
			<?php echo date("l jS, F Y"); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
         <!-- <div class="logo_area">-->
		  <img src="images/logo.jpg">
		  <!--<h1 class="logo">उदगीर <span style="color:red;">LIVE</span></h1>-->
       <!-- </div>-->
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="entertainment.php">मनोरंजन</a></li>
          <li><a href="crime.php">गुन्हा</a></li>
          <li><a href="polytics.php">राजकारण</a></li>
          <li><a href="viral.php">व्हायरल</a></li>
		  <li><a href="ads.php">जाहिरात</a></li>
		  <li><a href="agriculture.php">शेती</a></li>
		  <li><a href="health.php">आरोग्य</a></li>
		  <li><a href="commertial.php">व्यावसायिक</a></li>
		  <li><a href="realestate.php">वास्तविक</a></li>
		  <li><div class="searchbox">
		        
					<form action="search.php" method="get">
					
					<input type="text" name="search" placeholder="Enter Date(YY-MM-DD)"/>
					
					<button type="submit" name="submit" value="Search"><span><i class="fa fa-search"></i></span> Search</button>
					</form>
					</div></li>
        </ul>
      </div>
    </nav>
  </section>
  
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>ताज्या बातम्या</span>
          <ul id="ticker01" class="news_sticker">
<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from entertainment_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];
										$image=$row['image'];

						?>

						<li><a style="text-decoration:none;" href="ent_page.php?id=<?php echo "$id";?>"><img src="images/<?php echo $image ?>"><?php echo "$title";?></a></li>
<?php
					}
?>

<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from polytics_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="poly_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>


<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from crime_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="crime_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>


<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from agriculture_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="agriculture_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>

<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from realestate_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="estate_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>

<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from health_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="health_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>

<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from commertial_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="commertial_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>	

<?php
				include('includes/connect.php');
				mysqli_set_charset($conn,'utf8');
				$qry="select * from viral_post order by 1 desc limit 09";
				$query=mysqli_query($conn,$qry);

				while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$title=$row['title'];?>

						<li><a href="viral_page.php?id=<?php echo "$id";?>"><img src="images/news_thumbnail3.jpg" alt=""><?php echo "$title";?></a></li>
<?php
					}
?>
		
		</ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="https://www.facebook.com/"></a></li>
              <li class="twitter"><a href="https://twitter.com/"></a></li>
              <!-- <li class="flickr"><a href="#"></a></li> -->
              <!-- <li class="pinterest"><a href="#"></a></li> -->
              <!-- <li class="googleplus"><a href="#"></a></li> -->
              <!-- <li class="vimeo"><a href="#"></a></li> -->
              <li class="youtube"><a href="https://www.youtube.com/"></a></li>
              <li class="mail"><a href="https://www.gmail.com/"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </body>
  </html>