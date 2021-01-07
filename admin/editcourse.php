<?php include("header.php");?>
<form class="xform" id="admin_form" method="post">
 <header>Course Information<span>Editing Course Details</span></header>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="title" value="Demo Course 1" placeholder="Course Name">
      </label>
      <div class="note note-error">Course Name</div>
    </section>
	<section class="col col-6">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fees" value="10$" placeholder="Enter course fees">
      </label>
      <div class="note note-error">Course fees</div>
    </section>
  </div>
  <section>
    <div class="field-wrap wysiwyg-wrap">
      <textarea class="post" name="description" rows="5">Demo Course Description 1</textarea>
    </div>
  </section>
  <footer>
    <button class="button" name="dosubmit" type="submit">Update</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</form>
</div>
<?php include("footer.php");?>