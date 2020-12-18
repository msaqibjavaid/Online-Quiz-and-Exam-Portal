<?php include("header.php");?>
<div class="row heading-row">
	<h1>Contact Us</h1>
</div><div id="msgresult"></div>
<div class="row xform">
	<section class="col col-8">
	<form id="contact_form" method="post">
		<label class="input"> <i class="icon-prepend icon-user"></i> 
		<input type="text" name="fullname" placeholder="Name">
		</label>
		<div class="note">Write your full name</div>
		<br/><br/>
		<label class="input"> <i class="icon-prepend icon-inbox"></i> 
		<input type="email" name="semail" placeholder="Email">
		</label>
		<div class="message">Write your email address</div>
		<br/><br/>	
		<textarea style="padding: 10px;" name="notes" rows="10"></textarea>
		<div class="note">Please write here if you have any queries about our product and services.</div>
		<button class="button" name="dosubmit" type="submit">Submit</button>		
	</form>
	</section>
	<section class="col col-4">
		<p>We welcomes your questions, comments, suggestions, compliments and complaints as one critical way to continuously improve our services to you.</p>
		<ul class="contact-details">
				<li><i class="icon-truck"></i><span>Comsats University Islamabad, Vehari Campus</span><li>
				<li><i class="icon-phone-sign"></i><span>+92312345678</span><li>
				<li><i class="icon-envelope"></i><span>abc@gmail.com</span><li>
		</ul>
	</section>
</div>
<?php include("footer.php");?>