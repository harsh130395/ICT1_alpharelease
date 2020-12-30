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

<title> Reset Password | Youth of Today Welfare foundation - Yot</title>

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

    <h1 class="banner-inner" data-os-animation="fadeIn" data-os-animation-delay="0s" style="color: #1c1c1c;">Reset Your Password</h1>

          </div>

          <div class="col-md-2"></div>

        </div>

      </div>

    </section>

    <?
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

    if(empty($selector) || empty($validator)){
      echo "Colud not validate your request!";
    }
    else{
      if(ctype_xdigit($selector) ! == false && ctype_xdigit($validator) ! == false ){

        ?>
        <section class="section">

          <div class="background-overlay"></div>

          <div class="container">
    <div class="col-md-3"></div>
    		<div class="col-md-6" id="box">

       <form action="reset/request.php" method="POST">
         <input type ="hidden" name ="selector" value ="<?php echo $selector ?>">
         <input type ="hidden" name ="validator" value ="<?php echo $validator ?>">
         <input type="password" class="form-control is-valid" name="pwd" id="validationServer013" placeholder="Enter a new password..."
           required>
          <input type="password" class="form-control is-valid" name="pwd-repeat" id="validationServer013" placeholder="Repeat new password"
             required>
             <button class="btn btn-primary" name="reset-password-submit" type="submit">Submit</button>



    </form>
    <br>
    <div class="col-md-12 mb-3">

    									</div>

    </div>


    <div class="col-md-3"></div>
          </div>

        </section>

      }

    }







      <section class="newsletter">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<div class="content">
	<div class="col-md-4">


	</div>
	<div class="col-md-8">
	<form action="" method="POST">
	<div class="input-group">

    <span class="input-group-btn">

    </span>
    </div>
	</form>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>





</html>


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
.container-fricc{
    left:0px

}/* Popup box BEGIN */

.pop-paira p{
    text-align: center;
    float: left;
    font-size: 19px;
}
.log-btn{
    position: relative;
    top: 0%;
    margin-right: 60%;
}
.forget{
    float: left;
    margin-left: 5px;

}
</style>
