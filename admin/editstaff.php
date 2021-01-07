<?php include("header.php");?>
<form class="xform" id="admin_form" method="post">
  <header>Member Information<span>Editing Staff Details</span></header>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" disabled="disabled" name="username" readonly="readonly" value="admin" placeholder="username">
      </label>
      <div class="note">Username</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="password" placeholder="Password">
      </label>
      <div class="note note-error">Leave it empty unless changing the password.</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="email" value="support@saqibz.com" placeholder="email">
      </label>
      <div class="note note">Email Address</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-phone"></i>
        <input type="text" name="phone" placeholder="Phone Number">
      </label>
      <div class="note note">Phone Number</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fname" value="Saqib" placeholder="fname">
      </label>
      <div class="note note">First Name</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="lname" value="Javaid" placeholder="lname">
      </label>
      <div class="note note">Last Name</div>
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
        <input type="text" name="address" value="" placeholder="Address">
      </label>
      <div class="note note">Address</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-umbrella"></i>
        <input type="text" name="state" value="" placeholder="State">
      </label>
      <div class="note note">Province/State</div>
    </section>
     </div>
      <div class="row">
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-calendar"></i>
        <input type="text" disabled="disabled" readonly="readonly" name="created" value="2021-01-04 20:21:08" placeholder="Created on">
      </label>
      <div class="note note">Created</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-calendar"></i>
        <input type="text" disabled="disabled" readonly="readonly" name="lastlogin" value="2021-01-05 10:18:09" placeholder="Last Login">
      </label>
      <div class="note note">Last Login</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-laptop"></i>
        <input type="text" disabled="disabled" readonly="readonly" name="lastip" value="119.160.117.8" placeholder="Last Login IP">
      </label>
      <div class="note note">Last Login IP</div>
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
  <button class="button" name="dosubmit" type="submit" style="align-content: left">Update Profile</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</div>
</form>
</div>
<?php include("footer.php");?>