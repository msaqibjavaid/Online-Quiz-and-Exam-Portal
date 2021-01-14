<?php include("header.php");?>
<div class="card" style="margin: 8px;">
              <div class="card-header">
                <h1 class="card-title"><i class="icon-reorder"></i> &nbsp;Viewing Courses</h1>
                   <aside style="text-align: right"> <a href="addcourse.php"><span class="icon-plus">&nbsp;Add Course</span></a> </aside>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Fee</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  <tr>
                    <td>Demo Course 1</td>
                    <td>Demo Course Description 1</td>
                    <td>10$</td>
           <td>&nbsp;<span class="tbicon"> <a href="editcourse.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
          <span class="tbicon"> <a href="delete" ><i class="icon-trash"></i></a> </span>
         </td>
                  </tr>
                  <tr>
                    <td>Demo Course 2</td>
                    <td>Demo Course Description 2</td>
                      <td>Free</td>
                    
           <td>&nbsp;<span class="tbicon"> <a href="editcourse.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
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