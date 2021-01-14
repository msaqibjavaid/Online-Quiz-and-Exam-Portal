<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz and Exam Portal | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="style/bootstrap-4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="style/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="style/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="style/OverlayScrollbars.min.css">
  <link rel="stylesheet" type="text/css" href="style/forms.css">
    <link rel="stylesheet" type="text/css" href="style/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--- editor js -->
  <script src="style/tinymce.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea'
});
  tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300
});
</script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
 </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Dashboard</a>
      </li>
     
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../assets/images/logo.png" alt="Quiz and Exam Portal" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/images/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Noman and Saqib</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Manager
                <i class="fas fa-angle-left right"></i>
                             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="staff.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Students</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Courses and Exams
                <i class="fas fa-angle-left right"></i>
                             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="courses.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Manage Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="exams.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Manage Exams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="managequestions.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Manage Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addquestions.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add Questions</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="results.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Results</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ethernet"></i>
              <p>
                Enrollment & Billing
                <i class="fas fa-angle-left right"></i>
                             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Enrollment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Payement Gateways</p>
                </a>
              </li>
             
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Contents
                <i class="fas fa-angle-left right"></i>
                             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Resource Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Resource Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add Resource Item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Manage FAQS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Add FAQ Item</p>
                </a>
              </li>
        </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                System Setting
                <i class="fas fa-angle-left right"></i>
                             </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="config.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>System Configuration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="backup.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Database Backup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="email.php" class="nav-link">
                  <i class="nav-icon fas fa-angle-right"></i>
                  <p>Email Settings</p>
                </a>
              </li>
             
            </ul>
          </li>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="content-wrapper">
    	
