<?php include('header.php') ?>      

  
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Voting</h2>
        <p class="separator">Rwanda, officially the Republic of Rwanda, is a landlocked country in the Great Rift Valley, where the African Great Lakes region and East Africa converge. Located a few degrees south of the Equator, Rwanda is bordered by Uganda, Tanzania, Burundi, and the Democratic Republic of the Congo</p>

      </div>
    </div>

    <div class="container">
        <?php 
          $get_position = $connection->query("SELECT * FROM position");
          while ($positions=mysqli_fetch_array($get_position)) {
        ?>
          <div class="row" style="margin-top: 5%">
            <div class="col-md-6 col-lg-4">
              <div class="feature-block">
                <h4 style="font-weight: 900;font-size: 1.3em;color: #487e3b"><?php echo $positions['name']; ?></h4>
              </div>
            </div>
          </div>
          <div class="row">
            <?php 
              $position_id = $positions['id'];
              $get_position_candidates = $connection->query("SELECT * FROM candidates WHERE candidate_position ='$position_id' ");
              while ($candidates_info=mysqli_fetch_array($get_position_candidates)) {
           ?>
              <div class="col-md-6 col-lg-4">
                <div class="feature-block">
                  <img src="img/svg/approved.png" alt="img" class="img-fluid">
                  <h4><?php echo $candidates_info['candidate_name']; ?></h4>
                  <p><?php echo $positions['name']; ?></p>
                  <input type="hidden" name="candidate_name" value="<?php echo $candidates_info['candidate_name']; ?>">
                  <input type="hidden" name="candidate_position" value="<?php echo $candidates_info['candidate_position']; ?>">
                  <input type="hidden" name="candidate_position_name" value="<?php echo $candidates_info['candidate_position_name']; ?>">
                  <input type="checkbox" name="">
                  <span>Vote</span>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php 
          }
        ?>
    </div>

  </section>



<?php include('footer.php')  ?>
