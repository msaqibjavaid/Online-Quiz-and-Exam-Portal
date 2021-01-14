<?php include("header.php");?>
<form class="xform" id="admin_form" method="post">
    <header>Member Information<span>Editing Student Details</span></header>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" disabled="disabled" name="username" readonly="readonly" value="Student" placeholder="Username">
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
        <input type="text" name="email" value="student@saqibz.com" placeholder="Email Address">
      </label>
      <div class="note">Email Address</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-phone"></i>
        <input type="text" name="phone" value="03003837181" placeholder="Phone">
      </label>
      <div class="note">Phone Number</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="fname" value="Student" placeholder="First Name">
      </label>
      <div class="note">First Name</div>
    </section>
    <section class="col col-6">
      <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
        <input type="text" name="lname" value="First" placeholder="Last Name">
      </label>
      <div class="note">Last Name</div>
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
        <input type="text" name="city" value="Vehari" placeholder="City">
      </label>
      <div class="note note">City</div>
    </section>
    <section class="col col-3">
      <label class="input"> <i class="icon-prepend icon-pushpin"></i>
        <input type="text" name="zip" value="61000" placeholder="ZipCode">
      </label>
      <div class="note">Postal Code/Zip</div>
    </section>
  </div>
  <div class="row">
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-building"></i>
        <input type="text" name="company" value="DemoCompany" placeholder="Compnay">
      </label>
      <div class="note">Company</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-map-marker"></i>
        <input type="text" name="address" value="Demo Testing Address" placeholder="Address">
      </label>
      <div class="note note">Address</div>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-umbrella"></i>
        <input type="text" name="state" value="Punjab" placeholder="State">
      </label>
      <div class="note">State</div>
    </section>
  </div>
  <div class="row">
     <section class="col col-4">
      <label class="input">
        <input name="avatar" type="file" class="fileinput"/>
      </label>
      <div class="note note">Avator</div>
    </section>
    <section class="col col-3">
      <label class="input"> <i class="icon-prepend icon-credit-card"></i>
        <input type="text" name="vat" value="5366 1234 6789 9878" placeholder="Payement Details">
      </label>
      <div class="note">Payement Details</div>
    </section>
    <section class="col col-3">
      <label class="input"> <i class="icon-prepend icon-money"></i> <i class="icon-append icon-exclamation-sign  tooltip" "></i>
        <input type="text" name="currency" value="Rs." placeholder="Default Currency">
      </label>
      <div class="note">Default Currency</div>
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

  
   <footer > 
  <button class="button" name="dosubmit" type="submit" style="align-content: left">Update Profile</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</form>
<?php include("footer.php");?>