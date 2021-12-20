<?php include('header.php') ?>   
  <?php 
    if (isset($_SESSION['user_id'])) {
    }else{
      header("Location: index.php");
    }

  ?>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Account</h2>
        <p class="separator">Welcome to you account profile ... Rwanda, Officially The Republic Of Rwanda, Is A Landlocked Country In The Great Rift Valley, Where The African Great Lakes Region And East Africa Converge. Located A Few Degrees South Of The Equator, Rwanda Is Bordered By Uganda, Tanzania, Burundi, And The Democratic Republic Of The Congo</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form enctype="multipart/form-data" action="" method="POST" autocomplete="off" class="contactForm">
              <div class="form-group">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="text" name="first_name" class="form-control" id="name" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" value="<?php echo $_SESSION['user_first_name']; ?>" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="last_name" class="form-control" id="name" value="<?php echo $_SESSION['user_last_name']; ?>" placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="date" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="Your date of birth" data-rule="minlen:4" data-msg="Please enter at least 12 chars"  disabled="" required="" value="<?php echo $_SESSION['dateofbirth']; ?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" data-rule="minlen:4" data-msg="Please enter at least 12 chars" required="" value="<?php echo $_SESSION['address']; ?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="Your Phonenumber" data-rule="minlen:4" data-msg="Please enter at least 12 chars" required="" value="<?php echo $_SESSION['phonenumber']; ?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="national_id" class="form-control" id="national_id" placeholder="Your National Id" data-rule="minlen:4" data-msg="Please enter at least 12 chars" required="" disabled="" value="<?php echo $_SESSION['national_id']; ?>"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['user_email']; ?>" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required=""  />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Choose Password" data-rule="minlen:4" value="<?php echo $_SESSION['user_password']; ?>" data-msg="Please enter at least 8 chars of subject" required="" />
                <div class="validation"></div>
              </div>

              <div class="text-center">
                <!-- <input type="submit" name="signup_form" value="Sign Up"> -->
                <button type="submit" name="update_account">Update Account Information</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

<?php include('footer.php') ?> 