<?php include("header.php");?>
<div class="container" >
  <form class="xform" id="admin_form" method="post">
     <header>Add Staff<span>Fill in the Details</span></header>
    <div class="row">
     <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="username" placeholder="Username">
      </label>
      <div class="note note-error">This is a required field.</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="password" placeholder="Password">
      </label>
      <div class="note note-error">This is a required field.</div>
    </section>
  </div>
   <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="email" placeholder="Email Address">
      </label>
      <div class="note note-error">This is a required field.</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-phone"></i>
        <input type="text" name="phone" placeholder="Phone Number">
      </label>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fname" placeholder="First Name">
      </label>
      <div class="note note-error">This is a required field.</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="lname" placeholder="Last Name">
      </label>
      <div class="note note-error">This is a required field.</div>
    </section>
  </div>
  <hr>
   <div class="row">
    <section class="col col-5" >
      <select name="country" style="width:100%;height: 39px;background: #FBFBFB">
        <option disabled="" selected="" value="0">&nbsp;Country</option>
        
        <option value="Pakistan">Pakistan</option>
        
      </select>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-flag"></i>
        <input type="text" name="city" placeholder="City">
      </label>
    </section>
    <section class="col col-3">
      <label class="input"> <i class="icon-prepend icon-pushpin"></i>
        <input type="text" name="zip" placeholder="ZipCode">
      </label>
    </section>
  </div>
   <div class="row">
    <section class="col col-4">
      <label class="input">
        <input name="avatar" type="file" class="fileinput"/>
      </label>
      <div class="note note">Avator</div>
    </section>
  </div>
    <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-map-marker"></i>
        <input type="text" name="address" placeholder="Address">
      </label>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-umbrella"></i>
        <input type="text" name="state" placeholder="State/Province">
      </label>
    </section>
  </div>
  <hr>
   <header>Access Level</header>
  <section>
    <div>
      <label class="radio">
        <input type="radio" name="userlevel" value="9">
        <i></i>Admin</label>
      <label class="radio">
        <input type="radio" name="userlevel" checked="checked" value="5">
        <i></i>Staff</label>
      <div class="note note-info">Admin has full rights. Staff has access to just add exam and to view results.</div>
      <label class="checkbox">
        <input type="checkbox" name="notify" value="1">
        <i></i>Notify User</label>
      <div class="note note-info">Send welcome email to this user.</div>
    </div>
  </section>
  <footer > 
  <button class="button" name="dosubmit" type="submit" style="align-content: left">Adrd Staff</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</div>
 
</form>
</div>  
<?php include("footer.php");?>