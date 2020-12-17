<?php include("header.php"); ?>
<div class="row heading-row">
  <h1>Available Exams</h1>
</div>

<section class="widget">
  <div class="content2">
    <div class="row">
      <div class="ptop10">
        <form class="xform" id="dForm" method="post" style="padding:0;padding-top:15px">
          <section class="col col-8">
            <select name="select" id="coursefilter">
              <option value="">-- Select Course --</option>
              <option value="Demo Course 1">Demo Course 1</option>
             <option value="Demo Course 2">Demo Course 2</option>
              <option value="Demo Course 3">Demo Course 3</option>
             
            </select>
          </section>
      
      
         <section class="col col-2">
            <select name="select" id="coursefilter">
              <option value="">Items Per Page</option>
              <option value="10">10</option>
             <option value="20">20</option>
              <option value="100">100</option>
             
            </select>
          </section>
           <section class="col col-2">
            <select name="select" id="coursefilter">
              <option value="">Go to Page</option>
              <option value="10">1</option>
             <option value="20">2</option>
              <option value="100">3</option>
             
            </select>
          </section>
        </form>
      </div>
    </div>
    
    <table class="myTable">
      <thead>
        <tr>
          <th class="header">Exam Title</th>
          <th class="header">Course Title</th>
          <th class="header">Duration</th>
          <th class="header">Actions</th>
        </tr>
      </thead>
      
      <tr>
        <td>Demo Exam 1</td>
        <td><a href="exams.php">Demo Course 1</a></td>
        <td>10 (minutes)</td>
        <td>
      <a href="exams.php">Details</a>
      </tr>
      
    </table>
    
  </div>
</section>


<?php include("footer.php");?>