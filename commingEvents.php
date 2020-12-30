<?php
@session_start();
include("admin/include/connect.php");
$db=new Database();
?>
<!doctype html>

<html class="no-js" lang="">


<head>

<meta charset="utf-8">

<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

<title> Events | Youth of Today Welfare foundation - Yot</title>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="assets/css/extras.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" href="assets/css/corporate.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-touch-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-touch-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96">

<link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">

<link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />
   <script src="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.js"></script>
</head>



<body >

<div class="pace-overlay"></div>



<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">

  <div class="container-fluid">

   <div class="col-md-3">

	<div class="navbar-header">

      <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <a class="navbar-brand" href="index.php"> <img src="images/logo2.png"> <h2>Yot</h2></a> </div></div>



    <div class="col-md-6">

	<div class="nav-container">

      <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">

        <div class="menu-container">



          <ul class="nav navbar-nav" id="menu-main">

            <li class="menu-item "  id="man_id1"> <a href="index.php">Home</a> </li>
			<li class="menu-item " id="man_id2"> <a href="about-us.php">About Us</a> </li>
				<li class="menu-item active" id="man_id3"> <a href="Event.php">Events</a> </li>
					<li class="menu-item " id="man_id4"> <a href="volunteer.php">Volunteer</a> </li>
			 <!---<li class="menu-item  dropdown "> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i></a>
           <ul class="dropdown-menu dropdown-menu-left ">
            <li class="menu-item"> <a href="#"></a> </li>
			</ul>
		    </li>--->
		<li class="menu-item " id="man_id5"> <a  href="contact.php">Contact Us</a>
         </li>
         <?php
		if(isset($_SESSION['Bloog_user']))
		{
			?>
		<li class="menu-item " id="man_id6"><a  class=""><?php echo $_SESSION['Bloog_user'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="" style="top:0;">Logout</a></li>
		<?php
		}
		else
		{
			?>
		<li class="menu-item " id="man_id6"><a class="trigger_popup_fricc">Login</a></li>
		<?php
		}

		?>
		</ul>
		</div>
		</nav>
		</div> </div>

  </div>

</div>

<div id="content" role="main">

  <article>



   <section class="section">

      <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px"> </div>

      <div class="container">

        <div class="row">

          <div class="col-md-2 text-center"></div>

          <div class="col-md-8 text-center">

            <h1 class="banner-inner" data-os-animation="fadeIn" data-os-animation-delay="0s" style="color: #1c1c1c;">Events</h1>

          </div>

          <div class="col-md-2"></div>

        </div>

      </div>

    </section>


    <section class="section-top">
	<div class="container">
	<div class="row">
	<div class="col-md-12 heading-hed">

	<h1 class="text-center" data-os-animation="fadeIn" data-os-animation-delay="0s"style="color:Tomato">We are an operational NGO, that plan and carry out boots-on-the-ground projects to accomplish their objectives.</h1>
	<h2 class="text-center os-animation big-h2" style="color:Tomato">Welcome to our family</h2>


	</div>


	<div class="blg-section-service">
	<div class="col-md-12">

	<?php

	if(isset($_POST['ok']))
	{
		$data_search=$_POST['search'];


	$query="SELECT * FROM `blog` Where title LIKE '%".$data_search."%'";
									$run=$db->select($query);
									while($row=$run->fetch_assoc())
	{
	extract($row);
		?>
		<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php?data=<?= $id?>">
	<img src="admin/upload/<?= $Image;?>" alt="" class="">
	<p> <a href="blog-detail.php?data=<?= $id?>"><?= $title;?></a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#"><?= $Author;?></a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00"><?php
	$data_date=strtotime($Date);
	echo date('M d,Y', $data_date);


	?></time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#"><?php

	 $com_quer="SELECT * FROM `comment` Where ses_id='$id'";
		   $com_ran=$db->select($com_quer);
		  echo $_data=$com_ran->num_rows;

	?></a></span></span></h6>
	</a>
    </div>
	</div>
		<?php
	}
	}
	else
	{
		$query="SELECT * FROM `blog`";
									$run=$db->select($query);
									while($row=$run->fetch_assoc())
	{
	extract($row);
		?>
		<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php?data=<?= $id?>">
	<img src="admin/upload/<?= $Image;?>" alt="" class="">
	<p> <a href="blog-detail.php?data=<?= $id?>"><?= $title;?></a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#"><?= $Author;?></a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00"><?php
	$data_date=strtotime($Date);
	echo date('M d,Y', $data_date);


	?></time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#"><?php

	 $com_quer="SELECT * FROM `comment` Where ses_id='$id'";
		   $com_ran=$db->select($com_quer);
		  echo $_data=$com_ran->num_rows;

	?></a></span></span></h6>
	</a>
    </div>
	</div>
		<?php
	}

	}



	?>








	</div>

	<!--<div class="col-md-12">
	<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php">
	<img src="images/b3.jpg" alt="" class="">
	<p><a href="">Here are stories from several successful entrepreneurs that have had success...</a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#">admin</a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00">May 9, 2019</time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#">0</a></span></span></h6>
	</a>
    </div>
	</div>

	<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php">
	<img src="images/b4.jpg" alt="" class="">
	<p><a href="">Here are stories from several successful entrepreneurs that have had success...</a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#">admin</a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00">May 9, 2019</time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#">0</a></span></span></h6>
	</a>
    </div>
	</div>
	</div>

	<div class="col-md-12">
	<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php">
	<img src="images/b5.jpg" alt="" class="">
	<p><a href="">Here are stories from several successful entrepreneurs that have had success...</a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#">admin</a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00">May 9, 2019</time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#">0</a></span></span></h6>
	</a>
    </div>
	</div>

	<div class="col-md-6">
	<div class="blg-section">
	 <a href="blog-detail.php">
	<img src="images/b6.jpg" alt="" class="">
	<p><a href="">Here are stories from several successful entrepreneurs that have had success...</a></p>
	<h6><span class="slide-meta-author"><span class="td-post-author-name1"><a href="#">admin</a>  <span class="span-dash">-</span> </span><span class="td-post-date1"><time class="entry-date updated td-module-date" datetime="2019-05-09T12:24:22+00:00">May 9, 2019</time></span><span class="span-space"></span><span class="td-slide-comments1"><i class="fa fa-comment"></i><a href="#">0</a></span></span></h6>
	</a>
    </div>
	</div>
	</div>---->
	</div>
	</div>
	</div>
	</section>

    <section class="newsletter">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="content">
	<div class="col-md-4">
	<h4>JOIN OUR Event Alerts</h4>
	</div>
	<div class="col-md-8">
	<form action="" method="POST">
	<div class="input-group">
    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
	<input type="text" class="form-control number-form" name="phone" placeholder="Enter your number" required>
    <span class="input-group-btn">
    <button class="btn" type="submit" name="action">Subscribe<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
    </span>
    </div>
	</form>
 <?php
									if(isset($_POST['action']))
									{
										extract($_POST);



										$query="INSERT INTO `subscriber`(`email`, `phone`) VALUES ('$email','$phone')";
										$run=$db->insert($query);
										if($run)
										{
												echo '<script> swal("Thanks !", "For Subscribing..", "success");</script><meta http-equiv="refresh" content="5">';
										}
										else
										{
												echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="5">';

										}
									}




									?>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>

  </article>

 <footer class="portfolio-title" id="footer">
	<section class="section-footer">
	<div class="container">
	<div class="row element-top-40 element-bottom-40 footer-columns-4">
	<div class="col-md-1"></div>

	<div class="col-md-8">
	<div class="sidebar-widget widget_categories">
	<ul>
			<li> <a href="https://www.facebook.com/youthoftoday10/"><i class="fa fa-facebook ff"></i>Facebook</a> </li>
			<li> <a href="https://twitter.com/YouthOfTodayWe1/status/1336271085780807682?s=19"><i class="fa fa-twitter ft"></i>Twitter</a> </li>
			<li>  <a href="https://youtube.com/channel/UCBaPxzFe-131TsSFN1Bx1xA"><i class="fa fa-youtube fy"></i>Youtube</a> </li>
	</ul>
	</div>
	</div>

	<div class="col-md-1"></div>
	</div>
	</div>
	</section>
	</footer>

	<div class="footer">
	<section class="section subfooter">
	<div class="container-fluid">
    <div class="row element-top-10 element-bottom-10 footer-columns-2">
	<div class="col-md-12">
    <div class="col-md-6">
	<div class="sidebar-widget widget_text">
	<div class="textwidget Copyright "> ICT-1 Analyse and Design by Group-1  </div>
	</div>
	</div>

    <div class="col-md-6">
	<div class="sidebar-widget widget_social">
	<ul class="unstyled inline social-icons social-simple social-normal">
	<li> <a href="index.php"> Home</a> </li>
	<li> <a href="about-us.php">About Us</a> </li>
		<li><a href="blog.php">Events</a> </li>
    <li><a href="volunteer.php">Volunteer</a> </li>
	<li><a href="contact.php">Contact Us</a> </li>
    </ul>
    </div>
	</div>

	</div>
	</div>
	</div>
	</section>
	</div>
</div>
<div class="go-to-top"><a class="go-top go-top-circle" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a> </div>
<script type="text/javascript">

        var oxyThemeData = {

            navbarHeight: 100,

            navbarScrolled: 90,

            navbarScrolledPoint: 20,

            menuClose: 'off',

            scrollFinishedMessage: 'No more items to load.',

            hoverMenu:

            {

                hoverActive: false,

                hoverDelay: 1,

                hoverFadeDelay: 200

            },

            siteLoader: 'on'

        };

    </script>
<script>

$(document).ready(function()
{
$(".active").addClass("LLLL_MMM");
$("#man_id1").mouseover(function()
{
$(this).addClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id2").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id3").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id4").removeClass("active");
$("#man_id5").removeClass("active");

});

$("#man_id4").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id5").removeClass("active");

});
$("#man_id5").mouseover(function()
{
$(this).addClass("active");
$("#man_id1").removeClass("active");
$("#man_id2").removeClass("active");
$("#man_id3").removeClass("active");
$("#man_id4").removeClass("active");

});

$(document).delegate("#man_id1","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});


$(document).delegate("#man_id2","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});

$(document).delegate("#man_id3","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});

$(document).delegate("#man_id4","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});
$(document).delegate("#man_id5","mouseout",function()
{
$(this).removeClass("active");
$(".LLLL_MMM").addClass("active");

});
});

</script>
<script src="assets/js/theme.min.js"></script>

</body>





</html>
<?php
include("LLong.php");
?>
