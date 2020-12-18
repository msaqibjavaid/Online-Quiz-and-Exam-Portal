<?php include("header.php");?>
<script>
jQuery(document).ready(function($) {
  var allPanels = jQuery('.faqs > dd').hide();
  jQuery('.faqs > dt > a').click(function() {
    allPanels.slideUp();
    jQuery(this).parent().next().slideDown();
    return false;
  });

});
</script>
<div class="row heading-row">
	<h1>Frequently Asked Questions</h1>
</div>
<div class="row xform">
	<section class="col col-12">
	<div class="sample"><dl class="faqs">
		<dt><a href="#nofollow">
			<h3>What is Quiz & Exam Portal</h3>
		</a></dt><dd>
			Quiz and Exam Portal is a online academy for taking tests and getting certificate for passed courses.
		</dd>

		
	</dl></div>
	
	</section>
</div>
<?php include("footer.php");?>