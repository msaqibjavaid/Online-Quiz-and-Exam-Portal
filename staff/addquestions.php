<?php include("header.php");?>
<form class="xform" id="admin_form" method="post">
  <div class="subheader">
    <div class="row">
      <section class="col col-12"> Question<span>Add New Question</span> </section>
      <section class="col col-12">
        <div class="radio-toolbar" id="tabs">
          <input name="qtype" type="radio" id="radio1" value="1" /><label for="radio1">True/False</label>
          <input name="qtype" type="radio" id="radio2" value="2" /><label for="radio2">MCQ(1 from 4)</label>
          <input name="qtype" type="radio" id="radio3" value="3" /><label for="radio3">MCQ(multiple answer)</label>
          <input name="qtype" type="radio" id="radio4" value="4" /><label for="radio4">Writing</label>
        </div>
      </section>
    </div>
  </div>
  <div id="general" class="tab_content">
    <div class="row">
	  <section class="col col-9">
        <select name="examid">
          <option value=""> -- Select Exam --</option>
           <option value="">Demo Exam 1</option>
        </select>
        <div class="note note-error">Choose Exam</div>
      </section>
	  
	  <section class="col col-3">
        <label class="input"> <i class="icon-append icon-asterisk"></i>
          <input type="text" name="marks" value="" placeholder="Marks">
        </label>
        <div class="note note-error">Marks for Question</div>
      </section>
    </div>
    
	<section>
      <div class="field-wrap wysiwyg-wrap">
       <textarea rows="5" style="width: 100%"></textarea>
      </div>
    </section>
	<hr>
	<section>
      <h2>Answer for Question</h2>
    </section>
	
	<div class="row" id="qtypea1">	  
	  <section class="col col-12">
		<div class="radio-toolbar" style="float: left;">
          <input name="answer1" type="radio" id="answer11" value="1" /><label for="answer11">True</label>
          <input name="answer1" type="radio" id="answer12" value="0" /><label for="answer12">False</label>
        </div>		
      </section>
    </div>
	<div class="row" id="qtypea2">	  
	  <section class="col col-9">
		<div class="field-wrap">
			<textarea rows="5" style="width: 100%"></textarea>
		</div>
      </section>
	  <section class="col col-3">
		<select name="correct2[]">
			<option value="0">Incorrect</option>
			<option value="1">Correct</option>
		</select>
      </section>	  
	  <section class="col col-9">
		<div class="field-wrap">
			<textarea rows="5" style="width: 100%"></textarea>
		</div>
      </section>
	  <section class="col col-3">
		<select name="correct2[]">
			<option value="0">Incorrect</option>
			<option value="1">Correct</option>
		</select>
      </section>	  
	  <section class="col col-9">
		<div class="field-wrap">
			<textarea rows="5" style="width: 100%"></textarea>
		</div>
      </section>
	  <section class="col col-3">
		<select name="correct2[]">
			<option value="0">Incorrect</option>
			<option value="1">Correct</option>
		</select>
      </section>	  
	  <section class="col col-9">
		<div class="field-wrap">
			<textarea rows="5" style="width: 100%"></textarea>
		</div>
      </section>
	  <section class="col col-3">
		<select name="correct2[]">
			<option value="0">Incorrect</option>
			<option value="1">Correct</option>
		</select>
      </section>
    </div>
	<div class="row input_fields_wrap" id="qtypea3">	  
	  <section class="col col-12">
        <button class="button add_field_button" style="float: left;">Add More Answer</button>
      </section>
	  <section class="col col-9">
		<div class="field-wrap">
			<textarea rows="5" style="width: 100%"></textarea>
		</div>
      </section>
	  <section class="col col-3">
		<select name="correct3[]">
			<option value="0">Incorrect</option>
			<option value="1">Correct</option>
		</select>
      </section>
    </div>
	<div class="row" id="qtypea4">	  
	  <section class="col col-12">
        <label class="input"> <i class="icon-append icon-asterisk"></i>
          <input type="text" name="answer4" value="" placeholder="write the answer">
        </label>
        <div class="note note-error">Answer for Question</div>
      </section>
    </div>
	
    <footer>
      <button class="button" name="dosubmit" type="submit">Add Question</button>
      <a href="index.php" class="button button-secondary">Cancel</a>
	</footer>
  </div>
</form>

<script type="text/javascript"> 
// <![CDATA[
  $(document).ready(function(){
	$("input[name='qtype']").change(function () {
		var deger = $(this).val();

		if (deger == 1) {
			$("#qtypea1").show();
			$("#qtypea2").hide();
			$("#qtypea3").hide();
			$("#qtypea4").hide();
		}
		else if (deger == 2) {
			$("#qtypea1").hide();
			$("#qtypea2").show();
			$("#qtypea3").hide();
			$("#qtypea4").hide();
		}
		else if (deger == 3) {
			$("#qtypea1").hide();
			$("#qtypea2").hide();
			$("#qtypea3").show();
			$("#qtypea4").hide();
		}
		else{
			$("#qtypea1").hide();
			$("#qtypea2").hide();
			$("#qtypea3").hide();
			$("#qtypea4").show();
		}
	});
});
// ]]>
</script>
</div>
<?php include("footer.php");?>