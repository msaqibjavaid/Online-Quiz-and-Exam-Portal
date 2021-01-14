<?php include("header.php"); ?>
		
		<div class="row xform greentip">
			<section class="col col-9" style="margin-bottom: 0;">
				<h1>Exam: Demo Exam 1</h1>
				<h3>Duration 25 minutes</h3>
				<h3>Marks: 25</h3>
				<h3>Total Question: 25</h3>
			</section>
			
			<section class="col col-3" style="margin-bottom: 0;">
				<div id="timer" style="float:right;">
					<script type="application/javascript">
					var myCountdownTest = new Countdown({
						time: 1500, 
						width:200, 
						height:80, 
						rangeHi:"minute"
					});
					</script>
					<script>
					setTimeout(function() {
						document.location.href='account.php?do=result';
					}, 1500000);
					</script>
				</div>
			</section>
		</div>
		<div id="msgresult"></div>
		<form id="ques_form" class="xform" method="post" action="result.php">
			<div class="row" id="ques_area">
				<section class="col col-12">
					<style type="text/css">
						input {
							float: right;
						}
					</style>
					<h2>Question-1 (1Marks)</h2>
					<h3>Hello I am Question No.1 Please select one answer.</h3>
					 <label class="radio">
					 <input type='radio' name='answer' value='Demo Option 1' /><i></i>Demo Option 1</label>
                     <label class="radio">
					 <input type='radio' name='answer' value='Demo Option 2' /><i></i>Demo Option 2</label>
					 <label class="radio">
					 <input type='radio' name='answer' value='Demo Option 3' /><i></i>Demo Option 3</label>
					 <label class="radio">
					 <input type='radio' name='answer' value='Demo Option 4' /><i></i>Demo Option 4</label>
					
</section>
			
		</form>	
		 <footer > 
              <button class="button" name="dosubmit" type="submit" style="align-content: left">Submit</button>
          </footer>	
		
<?php include("footer.php"); ?>