<?php include("header.php");?>
<form class="xform" id="admin_form" method="post">
    <header>Add Student<span>Fill in the Details</span></header>
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
      <label class="input"> <i class="icon-prepend icon-building"></i>
        <input type="text" name="company" placeholder="Company">
      </label>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-map-marker"></i>
        <input type="text" name="address" placeholder="Address">
      </label>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-umbrella"></i>
        <input type="text" name="state" placeholder="State">
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
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-credit-card"></i>
        <input type="text" name="vat" placeholder="Payement Details">
      </label>
    </section>
    <section class="col col-4">
      <label class="input"> <i class="icon-prepend icon-money"></i> <i class="icon-append icon-exclamation-sign  tooltip" ></i>
        <input type="text" name="currency" placeholder="Default Currency">
      </label>
    </section>
  </div>
   <footer>
    <button class="button" name="dosubmit" type="submit">Add Student</button>
    <a href="index.php" class="button button-secondary">Cancel</a> </footer>
</form>
<?php include("footer.php");?>