<?php include('header.php') ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Votes</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logoutdashboard.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">VVS Votes</h4>
                  <p class="card-category"> Check position votes with candidates</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Position</th>
                        <th>Winner</th>
                        <th>Number of votes</th>
                        <!-- <th>City</th> -->
                        <th>votes</th>
                      </thead>
                      <tbody>
                        <?php 
                            $get_position = $connection->query("SELECT * FROM position");
                            while ($position=mysqli_fetch_array($get_position)) {
                                $position_id = $position['id'];
                                //$get_highest_vote = $connection->query("SELECT * FROM position WHERE position_id='$position_id' ANd ");
                                $get_highest_vote = $connection->query("SELECT candidate_it, COUNT(id) as vote_number FROM votes WHERE position_id='$position_id' GROUP BY candidate_it ORDER BY COUNT(id) DESC LIMIT 1");
                                $vote_info_number=mysqli_num_rows($get_highest_vote);
                                if ($vote_info_number > 0) {
                                    $vote_result = mysqli_fetch_array($get_highest_vote);
                                    $voted_candidate = $vote_result['candidate_it'];
                                    $get_candidate_info = $connection->query("SELECT * FROM candidates WHERE id = '$voted_candidate' LIMIT 1");
                                    $voted_candidate_info = mysqli_fetch_array($get_candidate_info);

                                    $choosen_candidate = $voted_candidate_info['candidate_name'];
                                    $choosen_candidate_vote = $vote_result['vote_number'];

                                }else{

                                    $choosen_candidate = "WAITING FOR VOTE";
                                    $choosen_candidate_vote = "WAITING FOR VOTE";
                                }
                         ?>
                        <tr>
                          <td><?php echo $position['id']; ?></td>
                          <td><?php echo $position['name']; ?></td>
                          <td>
                            <?php echo $choosen_candidate;?>
                          </td>
                          <td>
                            <?php echo $choosen_candidate_vote;?>
                          </td>
                          <td class="text-primary">
                                <a href="check-full-votes.php?position=<?php echo $position['id']; ?>&position_name=<?php echo $position['name']; ?>" style="background-color:black;border-radius: 10px;padding: 2px 10px 2px 10px;color: white">CHECK FULL VOTES</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
<?php include('footer.php') ?>