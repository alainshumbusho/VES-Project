<?php include('header.php') ?>   


  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Sign In</h2>
        <p class="separator">Please sign In to use voting system, we help you support your prefered candidate</p>
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
                    <input type="text" name="email" class="form-control" id="name" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" id="name" placeholder="password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="text-center">
                      <button type="submit" name="signin_form">Sign In</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

<?php include('footer.php') ?> 