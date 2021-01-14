<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz and Exam Portal - Admin Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="style/loginstyle.css">
</head>
<body>
<form method="post" action="index.html">
<div class="box">
<h1>Staff Login Page</h1>

<input type="email" name="email"  placeholder="Email" onblur="field_blur(this, 'Email');" class="email" />
  
<input type="password" name="password"   onblur="field_blur(this, 'password');" class="email" />
  
<a href="index.php"><div class="btn">Sign In</div></a> <!-- End Btn -->

<a href="../admin/login.php"><div id="btn2">Login as Admin</div></a> <!-- End Btn2 -->
  <div class="note note-error">No Details Required Just Click Sign in : Demo</div>
</div> <!-- End Box -->
  
</form>

<script type="text/javascript">
  function field_focus(field, email)
  {
    if(field.value == email)
    {
      field.value = '';
    }
  }

  function field_blur(field, email)
  {
    if(field.value == '')
    {
      field.value = email;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

//Stop click event
$('a').click(function(event){
    event.preventDefault(); 
  });
</script>
</body>
</html>