
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
<title>Online Quiz and Exam Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="theme/master/front/style/style.css"  type="text/css" />
<link rel="stylesheet" href="assets/style/jquery-ui.css" type="text/css" />
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.ui.touch-punch.js"></script>
<script src="assets/js/jquery.wysiwyg.js"></script>
<script src="assets/js/global.js"></script>
<script src="assets/js/nicescroll.js" type="text/javascript" ></script>
<script src="assets/js/modernizr.mq.js" type="text/javascript" ></script>
<script src="assets/js/checkbox.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/fancybox/jquery.fancybox.pack.js"></script>
<script src="assets/fancybox/helpers/jquery.fancybox-media.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/style/flexslider.css" media="screen" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="theme/master/front/style/new.css"  type="text/css" />
<script type="text/javascript"> 
// Slider with thumbnail
$(document).ready(function() {
	$('#slider').flexslider({
		animation: "slide",
		controlNav: true,
		autoplay: false,
		directionNav: true,
		animationLoop: true,
		slideshow: true
    });
});
</script>

</head>
<body data-smooth-scrolling="1">
<div id="loader" style="display:none"></div>
<div class="bg">
<div class="container" style="background: #009fda;">
<div class="in-grid">
<!-- Breadcrumbs -->
    <section id="crumbs" class="row crumbs2">
      <div class="col grid_6">
        <a href="index.php">'<img src="" alt="Quiz Portal" class="front-logo"/>Online Quiz and Exam</a>
      </div>
	  <div class="col grid_14">
	  	<!--Social -->
		<ul class="social">
			<li><a href="#" target="_blank"><i class="fa fa-facebook feature-icon"></i></a></li>
		
			<li><a href="#" target="_blank"><i class="fa fa-twitter feature-icon"></i></a></li>
		
			<li><a href="#" target="_blank"><i class="fa fa-google-plus feature-icon"></i></a></li>
		
			<li><a href="#" target="_blank"><i class="fa fa-pinterest feature-icon"></i></a></li>
		
			<li><a href="#" target="_blank"><i class="fa fa-linkedin feature-icon"></i></a></li>
		
			<li><a href="#" target="_blank"><i class="fa fa-rss feature-icon"></i></a></li>
	
		</ul>
		<!-- Social -->
      </div>
	  <div class="col grid_4 header-login">
		
			<a href="login.php" class="button-login">Login</a><a href="register.php" class="button-register">Register</a>
		
			<a href="logout.php" class="button-logout">Logout</a>
		
      </div>
    </section>
    <!-- Breadcrumbs /-->
	<!-- Header -->
	<header id="header" class="clearfix">
	  <div class="row grid_24 clearfix"> 
		<!-- Main Menu -->
		<nav id="menu" class="nav">
		  <ul>
			<li class="active"> <a href="index.php"><span>Home</span> </a> </li>
			<li> <a href="courses.php"><span>Courses</span> </a> </li>
			<li> <a href="exams.php"><span>Exams</span> </a> </li>
			<li> <a href="resources.php"><span>Prepare</span> </a> </li>
			<li> <a href="faqs.php"><span>FAQs</span> </a> </li>
			<li> <a href="contact.php"><span>Contact</span> </a> </li>
		  </ul>
		</nav>
		<!-- Main Menu  /--> 
	  </div>
	</header>
</div>
</div>
