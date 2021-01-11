<?php include("header.php");?>

 <div class="card" style="margin: 8px;">
              <div class="card-header">
                <h1 class="card-title"><i class="icon-reorder"></i> &nbsp;Viewing Questions</h1>
                   <aside style="text-align: right"> <a href="addquestions.php"><span class="icon-plus">&nbsp;Add Question</span></a> </aside>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Question Title</th>
                    <th>Exam Name</th>
                    <th>Question Type</th>
                    <th>Marks</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  <tr>
                    <td>This is a MCQ Question (Single Answer) dsfsdfsd</td>
                    <td>Demo Exam 3</td>
                     <td>MCQ(1 from 4)</td>
                     <td>50</td>
           <td>&nbsp;
           	 <span class="tbicon"> <a href="managequestion.php" ><i class="icon-suitcase"></i></a> </span>&nbsp;
           	 <span class="tbicon"> <a href="editquestion.php" ><i class="icon-plus"></i></a> </span>&nbsp;
          <span class="tbicon"> <a href="delete" ><i class="icon-trash"></i></a> </span>
         </td>
                  </tr>
                  <tr>
                     <td>This is a writing question ihdfilsdbflsil</td>
                    <td>Demo Course Name 1</td>
                     <td>Writing</td>
                     <td>10</td>
                    
           <td>&nbsp;
            <span class="tbicon"> <a href="managequestion.php" ><i class="icon-suitcase"></i></a> </span>&nbsp;
             <span class="tbicon"> <a href="editquestion.php" ><i class="icon-plus"></i></a> </span>&nbsp;
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