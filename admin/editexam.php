<?php include("header.php");?>
 <form class="xform" id="admin_form" method="post">
 <header>Add New Exam<span>Fill in the Details Below</span></header>
  <div class="row">
    <section class="col col-5">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="title" placeholder="Exam title" value="Demo Exam 1">
      </label>
      <div class="note note-error">Exam Title</div>
    </section>
  
  <section class="col col-3">
      <label class="input"> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="duration" placeholder="Exam duration" value="20 minutes">
      </label>
      <div class="note note-error">Exam Duration(minute)</div>
    </section>
    
    <section class="col col-4">
      <select name="course" >
        <option value="" >Demo Course Name</option>
      </select>
      <div class="note note-error">Related Course</div>
    </section>
  </div>
  
  <section>
    <textarea name="myTextarea" id="myTextarea"></textarea>
  </section>
  <footer>
    <button class="button" name="dosubmit" type="submit">Add Exam</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</form>
</div>
<?php include("footer.php");?>