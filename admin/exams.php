<?php include("header.php");?>

 <div class="card" style="margin: 8px;">
              <div class="card-header">
                <h1 class="card-title"><i class="icon-reorder"></i> &nbsp;Viewing Exams</h1>
                   <aside style="text-align: right"> <a href="addexam.php"><span class="icon-plus">&nbsp;Add Exams</span></a> </aside>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Exam Title</th>
                    <th>Course Title</th>
                    <th>Duration</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  <tr>
                    <td>Demo Exam 1</td>
                    <td>Demo Course Name</td>
                     <td>60 (minutes)</td>
           <td>&nbsp;
           	 <span class="tbicon"> <a href="manageexam.php" ><i class="icon-suitcase"></i></a> </span>&nbsp;
           	 <span class="tbicon"> <a href="addquestion.php" ><i class="icon-plus"></i></a> </span>&nbsp;
           	 <span class="tbicon"> <a href="editexam.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
          <span class="tbicon"> <a href="delete" ><i class="icon-trash"></i></a> </span>
         </td>
                  </tr>
                  <tr>
                     <td>Demo Exam 2</td>
                    <td>Demo Course Name 1</td>
                     <td>10 (minutes)</td>
                    
           <td>&nbsp;
           	 <span class="tbicon"> <a href="manageexam.php" ><i class="icon-suitcase"></i></a> </span>&nbsp;
           	 <span class="tbicon"> <a href="addquestion.php" ><i class="icon-plus"></i></a> </span>&nbsp;
           	 <span class="tbicon"> <a href="editstaff.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
          <span class="tbicon"> <a href="delete" ><i class="icon-trash"></i></a> </span>
         </td>
                  </tr>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
<?php include("footer.php");?>