<?php include('header.php') ?>      
  
  <style type="text/css">
    #voteButton{
      background-color: #71c55d;
      border: 1px solid #71c55d;
      color: white;
      font-weight: bold;
      padding: 5px 20px 5px 20px
    }
    #voteButton:hover{
      transition: 1.5s;
      background-color: #48763c;
      border: 1px solid #48763c;
    }
  </style>
  
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Voting</h2>
        <p class="separator">Rwanda, officially the Republic of Rwanda, is a landlocked country in the Great Rift Valley, where the African Great Lakes region and East Africa converge. Located a few degrees south of the Equator, Rwanda is bordered by Uganda, Tanzania, Burundi, and the Democratic Republic of the Congo</p>

      </div>
    </div>

    <div class="container">
      <div class="form">
            <form enctype="multipart/form-data" action="" method="POST" autocomplete="off" class="contactForm">
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="position_name" name="position" required="" onchange="select_position();">
                          <option value="">Select Positions</option>
                          <?php 
                            $get_position = $connection->query("SELECT * FROM position");
                            while ($positions=mysqli_fetch_array($get_position)) {
                          ?>
                            <option value="<?php echo $positions['id']; ?>"><?php echo $positions['name']; ?></option>
                          <?php } ?>
                      </select>
                      <!-- <input type="text" name="first_name" class="form-control" id="name" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" /> -->
                      <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" id="candidateSection">
                      <select class="form-control" id="position_candidates" name="position_candidates">
                          <option value="">Select Position First</option>
                          <option></option>
                      </select>
                      <!-- <input type="text" name="first_name" class="form-control" id="name" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" /> -->
                      <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                      <!-- <input type="submit" name="signup_form" value="Sign Up"> -->
                      <button type="submit" name="vote_candidate" id="voteButton" style="">VOTE</button>
                    </div>
                </div>
              </div>
            </form>
      </div>
    </div>

  </section>


<?php include('footer.php')  ?>
