<?php include("header.php");?>
<p class="pagetip"><i class="icon-lightbulb icon-3x pull-left"></i> Please fill out the form below to register your account.<br>
  <i class="icon-append icon-asterisk"></i> Fields marked  are required.</p>
<div id="msgresult"></div>
<form class="xform" id="user_form" method="post">
  <header><img src="uploads/logo.png" alt="Quiz and Exam Portal" class="logo"/>Quiz and Exam Portal</header>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="username" placeholder="Username">
      </label>
      <div class="note">Username</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
        <input type="password" name="pass" placeholder="Password">
      </label>
      <div class="note">Password</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="email" placeholder="Email">
      </label>
      <div class="note">Email</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
        <input type="password" name="pass2" placeholder="Repeat Password">
      </label>
      <div class="note">Repeat Password</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fname" placeholder="First Name">
      </label>
      <div class="note">First Name</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="lname" placeholder="Last Name">
      </label>
      <div class="note">Last Name</div>
    </section>
  </div>
  <hr>
  <div class="row">
    <section class="col col-5">
      <select name="country">
        <option>Country</option>
        
        <option value="Pakistan">Pakistan</option>
        
      </select>
      <div class="note">Country</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-flag"></i>
        <input type="text" name="city" placeholder="City">
      </label>
      <div class="note">City</div>
    </section>
    <section class="col col-3">
      <label class="input"> <i class="icon-prepend icon-pushpin"></i>
        <input type="text" name="zip" placeholder="ZipCode">
      </label>
      <div class="note">ZipCode</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-building"></i>
        <input type="text" name="company" placeholder="Company">
      </label>
      <div class="note">Company</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-map-marker"></i>
        <input type="text" name="address" placeholder="Address">
      </label>
      <div class="note">Address</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-umbrella"></i>
        <input type="text" name="state" placeholder="State">
      </label>
      <div class="note">State</div>
    </section>
  </div>
  <footer>
    <button class="button" name="dosubmit" type="submit">Register Account</button>
    <a href="index.php" class="button button-secondary">Back to Login</a> </footer>
  <input name="doRegister" type="hidden" value="1" />
</form>

<?php include("footer.php");?>