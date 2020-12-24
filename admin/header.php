<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Online Quiz and Exam portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../theme/master/admin/style/style.css"  type="text/css" />
<link rel="stylesheet" href="../assets/style/jquery-ui.css" type="text/css" />
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.js"></script>
<script src="../assets/js/jquery.wysiwyg.js"></script>
<script src="../assets/js/global.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/nicescroll.js" type="text/javascript" ></script>
<script src="../assets/js/modernizr.mq.js" type="text/javascript" ></script>
<script src="../assets/js/checkbox.js"></script>
<script src="../assets/fancybox/jquery.fancybox.pack.js"></script>
<script src="../assets/fancybox/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/fancybox/jquery.fancybox.css" media="screen" />
<script src="admin/js/menu.js"></script>

</head>
<body data-smooth-scrolling="1">
<div id="loader" style="display:none"></div>
<div class="bg">
  <div class="container">
  
<div class="row grid_24"  id="crumbs">
	
	<div class="col grid_5">
		<div class="header-logo"><a href="index.php"><img src="../uploads/logo.png" alt="Quiz and Exam Portal" class="logo"/>Quiz and Exam portal</a></div>
	</div>
	<div class="col grid_19">
		<section class="row">
		  <div class="col grid_16">
		
		  </div>
 <div class="col grid_8"> 
			<!-- User Panel -->
			<div id="userpanel"> <img src="../uploads/avatars/avator.png";?>Admin Image<span>Admin</span>
			  <ul class="profilenav">
				<li> <a href="#" id="showhide">
				  <p>English</p>
				  </a>
				  <div id="settingslist">
					<ul class="sub">
					  <li><i class="icon-reorder pull-left"></i> <a href="index.php">Account Settings</li>
					  <li><i class="icon-signout pull-left"></i> <a href="logout.php">Logout</a></li>
					</ul>
				  </div>
				</li>
			  </ul>
			</div>
			<!-- User Panel /-->  
		  </div>
		</section>
	</div>
</div>
	
<div class="row grid_24 clearfix">
	<div id="bitset" class="col grid_5">
	<div id="truecontent">
		<!-- Header -->
		<header id="header" class="clearfix">
			<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
			  <div class="cbp-hsinner">
				<ul class="cbp-hsmenu">
				  
				  <li> <a href="#">User Manager</a>
					<ul class="cbp-hssubmenu">
					  <li><a href="index.php"><i class="icon-user menu-icon"></i><span>Staff</span></a></li>
					  
					  <li><a href="index.php"><i class="icon-users menu-icon"></i><span>Clients</span></a></li>
					 
					</ul>
				  </li>
				  <li> <a href="#">Course & Exams</a>
					<ul class="cbp-hssubmenu">
					  
					  <li><a href="course.php"><i class="icon-copy menu-icon"></i><span>Manage Courses</span></a></li>
					  <li><a href="exam.php"><i class="icon-exams menu-icon"></i><span>Manage Exams</span></a></li>
					  <li><a href="question.php"><i class="icon-ques menu-icon"></i><span>Manage Questions</span></a></li>
					  <li><a href="addquestion.php"><i class="icon-addq menu-icon"></i><span>Add Question</span></a></li>					  
					  
					  <li><a href="result.php"><i class="icon-result menu-icon"></i><span>Results</span></a></li>
					</ul>
				  </li>
				  <li> <a href="#">Enrolment & Billing</a>
					<ul class="cbp-hssubmenu">
					  <li><a href="enroll.php"><i class="icon-enrol menu-icon"></i><span>Enrolment</span></a></li>
					  <li><a href="transactions.php"><i class="icon-trans menu-icon"></i><span>Transactions</span></a></li>
					  <li><a href="gateways.php"><i class="icon-payment menu-icon">Gateways</span></a></li>
					</ul>
				  </li>
				 