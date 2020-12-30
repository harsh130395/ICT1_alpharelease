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

<title>Contact Us | Youth of Today Welfare foundation - Yot</title>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="assets/css/extras.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/corporate.min.css">

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



<body>

<div class="pace-overlay"></div>

<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">

  <div class="container-fluid">

    <div class="col-md-3">

	<div class="navbar-header">

      <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <a class="navbar-brand" href="index.php"> <img src="images/logo2.png"><h2>Yot</h2></a> </div></div>



    <div class="col-md-6">

	<div class="nav-container">

      <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">

        <div class="menu-container">



          <ul class="nav navbar-nav" id="menu-main">

            <li class="menu-item "  id="man_id1"> <a href="index.php">Home</a> </li>
			<li class="menu-item " id="man_id2"> <a href="about-us.php">About Us</a> </li>
				<li class="menu-item " id="man_id3"> <a href="blog.php">Blog</a> </li>
					<li class="menu-item " id="man_id4"> <a href="volunteer.php">Volunteer</a> </li>
			 <!---<li class="menu-item  dropdown "> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i></a>
           <ul class="dropdown-menu dropdown-menu-left ">
            <li class="menu-item"> <a href="#"></a> </li>
			</ul>
		    </li>--->
		<li class="menu-item active" id="man_id5"> <a  href="contact.php">Contact Us</a>
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

      <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px" style="background-image: url(ok/bm.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;"> </div>

      <div class="background-overlay" style="background-color: rgba(1,192,225,0.8);"></div>

      <div class="container">

        <div class="row">

          <div class="col-md-2 text-center"></div>

          <div class="col-md-8 text-center">

		  <h1 class="banner-inner" data-os-animation="fadeIn" data-os-animation-delay="0s" style="color: #1c1c1c;">Contact Us</h1>
		</div>

          <div class="col-md-2"></div>

        </div>

      </div>

    </section>

    <section class="section">

      <div class="background-overlay" style="background-color: rgba(255,255,255,0);"></div>

      <div class="container">

      <div class="row">

        <div class="col-md-12 text-center col-border-bottom">

          <div class="row">

            <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">

              <div class="divider-wrapper">

                <div class="visible-xs element-height-60"></div>

                <div class="visible-sm element-height-60"></div>

                <div class="visible-md element-height-60"></div>

                <div class="visible-lg element-height-60"></div>

              </div>

              <!--<form id="contactForm" action="" method="POST" class="contact-form">-->
            <div><header text-align :"center"><b> Send us a message</b></header></div>

  <form  action="" method="POST" >
                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-user"></i>

                      <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>

                      <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required>

                    </div>

                  </div>

                </div>

				<div class="row">

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"> <i class="fa fa-phone"></i>

                      <input class="form-control" id="phone" name="phone" placeholder="Your Contact No. *" type="text" required>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-group form-icon-group"></i>

                      <input class="form-control" id="Subject" name="Subject" placeholder="Your Subject *" type="text" required>

                    </div>

                  </div>

                </div>

                <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i>

                  <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required></textarea>

                </div>

                <div class="text-center">

                  <input type="submit" value="Send email" name="action1" class="btn btn-primary">

                </div>

                <div class="messages text-center"></div>

              </form>

              <div class="divider-wrapper">

                <div class="visible-xs element-height-60"></div>

                <div class="visible-sm element-height-60"></div>

                <div class="visible-md element-height-60"></div>

                <div class="visible-lg element-height-60"></div>

              </div>
 <?php
									if(isset($_POST['action1']))
									{
										extract($_POST);

										$contenting=$db->real_sc($message);

										$query="INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email','$phone','$Subject','$contenting')";
										$run=$db->insert($query);
										if($run)
										{
										echo '<script> swal("Thanks !", "Your Details Has Been Submitted Successfully....", "success");</script><meta http-equiv="refresh" content="1">';
										}
										else
										{
												echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="1">';

										}
									}




									?>
            </div>

            <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">

              <div class="divider-wrapper">

                <div class="visible-xs element-height-60"></div>

                <div class="visible-sm element-height-60"></div>

                <div class="visible-md element-height-60"></div>

                <div class="visible-lg element-height-60"></div>

              </div>

              <div class="google-map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0852766857156!2d153.02722321410218!3d-27.46660438289218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1559366568485!5m2!1sen!2sauhttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0852766857156!2d153.02722321410218!3d-27.46660438289218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a1d064dcb2f%3A0x7f3aed61f0bfd9e3!2sJames+Cook+University%2C+Brisbane+Campus!5e0!3m2!1sen!2sau!4v1559366568485!5m2!1sen!2sau" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                <div class="divider-wrapper">

                  <div class="visible-xs element-height-60"></div>

                  <div class="visible-sm element-height-60"></div>

                  <div class="visible-md element-height-60"></div>

                  <div class="visible-lg element-height-60"></div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section class="section">

      <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px" style="background-image: url(ok/bm.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;"> </div>

      <div class="background-overlay grid-overlay-0" style="background-color: rgba(3,194,227,0.9);"></div>

      <div class="container-fullwidth container-vertical-middle">

        <div class="row vertical-middle">

          <div class="col-md-3 text-center" style="background:rgba(0, 0, 0, 0.2);">

            <div class="divider-wrapper">

              <div class="visible-xs element-height-40"></div>

              <div class="visible-sm element-height-40"></div>

              <div class="visible-md element-height-40"></div>

              <div class="visible-lg element-height-40"></div>

            </div>


            <i class="fa fa-home text-light" style="font-size:24px"></i>
            <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">Address<br>
              <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">Mumbai</p>
          </p>





            <div class="divider-wrapper">

              <div class="visible-xs element-height-30"></div>

              <div class="visible-sm element-height-30"></div>

              <div class="visible-md element-height-30"></div>

              <div class="visible-lg element-height-30"></div>

            </div>

          </div>

          <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.15);">

            <div class="divider-wrapper">

              <div class="visible-xs element-height-40"></div>

              <div class="visible-sm element-height-40"></div>

              <div class="visible-md element-height-40"></div>

              <div class="visible-lg element-height-40"></div>

            </div>

            <i class="fa fa-envelope text-light" style="font-size:24px"></i>

            <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Mail Us <br>
              </p>
              <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">youthoftoday.foun@gmail.com</p>

            <div class="divider-wrapper">

              <div class="visible-xs element-height-30"></div>

              <div class="visible-sm element-height-30"></div>

              <div class="visible-md element-height-30"></div>

              <div class="visible-lg element-height-30"></div>

            </div>

          </div>

          <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.1);">

            <div class="divider-wrapper">

              <div class="visible-xs element-height-40"></div>

              <div class="visible-sm element-height-40"></div>

              <div class="visible-md element-height-40"></div>

              <div class="visible-lg element-height-40"></div>

            </div>

            <i class="fa fa-phone text-light" style="font-size:24px"></i>

            <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Call Us<br>
						</a></p>
            <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">09004813842</p>

            <div class="divider-wrapper">

              <div class="visible-xs element-height-30"></div>

              <div class="visible-sm element-height-30"></div>

              <div class="visible-md element-height-30"></div>

              <div class="visible-lg element-height-30"></div>

            </div>

          </div>

          <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.05);">

            <div class="divider-wrapper">

              <div class="visible-xs element-height-40"></div>

              <div class="visible-sm element-height-40"></div>

              <div class="visible-md element-height-40"></div>

              <div class="visible-lg element-height-40"></div>

            </div>

            <i class="fa fa-facebook text-light" style="font-size:24px"></i>

            <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s"> <a href="">follow us on

              Facebook<br>

             </a></p>

            <div class="divider-wrapper">

              <div class="visible-xs element-height-30"></div>

              <div class="visible-sm element-height-30"></div>

              <div class="visible-md element-height-30"></div>

              <div class="visible-lg element-height-30"></div>

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
	<div class="textwidget Copyright "> ICT-1 Analyse and Design by Group-1 </div>
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

<script src="assets/js/theme.min.js"></script>

<!-- load contact form js -->

<script src="assets/js/contact.min.js"></script>

<script src="assets/js/menu-style.js"></script>

<!-- load map js -->

<script>

        window.map = {

            map_type: 'ROADMAP',

            map_zoom: 15,

            map_style: 'blackwhite',

            map_scrollable: 'on',

            marker: 'show',

            label: ['London Royal', 'Athens Bistro'],

            address: '',

            latlng: ['51.511084, -0.133202', '51.506623, -0.111916'],

            center_latlng: '',

            markerURL: 'assets/images/marker.png',

            auto_center: true,

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



<script>
$(document).ready(function()
{

    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });

    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });


	$(".log").click(function()
	{
		$("#Login").show();
		$("#Registration").hide();
			$("#Login_forgot").hide();
	});
		$(".sign").click(function()
	{
		$("#Login").hide();
		$("#Registration").show();
			$("#Login_forgot").hide();


	});

		$(".forgootingiii").click(function()
	{
		$("#Login").hide();
		$("#Registration").hide();
			$("#Login_forgot").show();


	});
});

</script>
<style>
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
.forget{
    float: left;
    margin-left: 5px;

}
</style>
<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
        <p><div class="container">
		<div class="row">

		<button type="button" class="log" style="float:left;">Login</button>
		&nbsp;
		<button type="button" class="sign" style="float:left;">Sign Up</button>

		</div>
		</div>

		<div class="tab-content">
                            <div class="tab-pane" id="Login" style="display:block">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password" name="PASS" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name="okkk" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        </div>

                                        <div class="forget"><a herf="#poiu" class="forgootingiii">Forgot password?</a></div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration" style="display:none">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
										 <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" required />
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user_phone" name="user_phone" maxlength="14" minlength="10" placeholder="Mobile" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" name="yes" class="btn btn-primary btn-sm">
                                            Save </button>
                                      </div>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="Login_forgot" style="display:none">
                                <form role="form" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit"  name="okkkL" class="btn btn-primary btn-sm">
                                            <a href="password.php">Submit</button>
                                        </a></div>

                                         <div class="forget"><a herf="#fhj" class="log">Login</a></div>
                                </div>
                                </form>
                            </div>
                        </div>

		</p>
    </div>
</div>
<?php
if(isset($_POST['yes']))
{
	extract($_POST);

									$query="INSERT INTO `user_detail`(`name`, `email`, `phone`, `password`) VALUES ('$user_name','$user_email','$user_phone','$user_pass')";
										$run=$db->insert($query);
										if($run)
										{
											echo '<script> swal("Thanks !", "Details Has been Submitted..", "success");</script><meta http-equiv="refresh" content="5">';
										}
										else
										{
											echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="5">';

										}


}


if(isset($_POST['okkk']))
{
	extract($_POST);

      $query_schenck="SELECT * FROM `user_detail` WHERE email='$Email' AND password='$PASS'";
      $run_schenck=$db->select($query_schenck);
      $row_schenck=$run_schenck->num_rows;
      $row_data=$run_schenck->fetch_assoc();

      if($row_schenck>0)
      {
       $_SESSION['Bloog_user']=$Email;
       	echo '<script> swal("Thanks !", "You Are Successfully Logged In..", "success");</script><meta http-equiv="refresh" content="1">';

     }
      else
       {

        echo '<script>sweetAlert("Oops...", "Your Username or Password is invalid!", "error");</script><meta http-equiv="refresh" content="5">';

       }


}


?>



<script src="assets/js/map.min.js"></script>

</body>
</html>
