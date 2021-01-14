<?php include("header.php");?>
 <form class="xform" id="admin_form" method="post">
 <header>Add New Course<span>Fill in the Details Below</span></header>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="title" placeholder="Course Name">
      </label>
      <div class="note note-error">Course Name</div>
    </section>
	<section class="col col-6">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fees" placeholder="Enter course fees">
      </label>
      <div class="note note-error">Course fees</div>
    </section>
  </div>
  <section>
    <textarea name="myTextarea" id="myTextarea"></textarea>
  </section>
  <div class="row">
    <section class="col col-6">
      <label class="label">Recurring Payment</label>
      <label class="radio">
        <input type="radio" name="recurring" value="1">
        <i></i>Yes</label>
      <label class="radio">
        <input type="radio" name="recurring" value="0" checked="checked">
        <i></i>No</label>
    </section>
    <section class="col col-6">
      <select name="period">
        <option value="D">Days</option>
        <option value="W">Weeks</option>
        <option value="M">Months</option>
        <option value="Y">Years</option>
      </select>
      <div class="note"><i class="icon-caret-down"></i></div>
      <label class="input"> <i class="icon-append icon-exclamation-sign  tooltip" ></i>
        <input type="text" name="days" placeholder="Recurring Period">
      </label>
      <div class="note note">Recurring Period</div>
    </section>
  </div>
  
  
  <footer>
    <button class="button" name="dosubmit" type="submit">Add Course</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</form>
</div>
<?php include("footer.php");?>