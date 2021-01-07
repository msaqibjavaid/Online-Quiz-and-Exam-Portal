<?php include("header.php");?>

 <div class="card" style="margin: 8px;">
              <div class="card-header">
                <h1 class="card-title"><i class="icon-reorder"></i> &nbsp;Recent Enrolments</h1>
                   <aside style="text-align: right"> <a href="addstaff.php"><span class="icon-plus">&nbsp;Add Staff</span></a> </aside>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 
                  <tr>
                    <td>Noman Aslam</td>
                    <td>noman@gmail.com</td>
           <td>&nbsp;<span class="tbicon"> <a href="editstaff.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
          <span class="tbicon"> <a href="delete" ><i class="icon-trash"></i></a> </span>
         </td>
                  </tr>
                  <tr>
                    <td>Saqib Javaid</td>
                    <td>saqib@gmail.com</td>
                    
           <td>&nbsp;<span class="tbicon"> <a href="editstaff.php" ><i class="icon-pencil"></i></a> </span>&nbsp;
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