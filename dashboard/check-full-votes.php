<?php 
  include('header.php');
  if (!isset($_GET['position'])) {
    echo "<script>window.location.href='votes.php';</script>";
  }
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">FULL VOTES INFORMATION</a>
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
                  <h4 class="card-title ">Full Votes INfo</h4>
                  <p class="card-category"> Check position Full votes with candidates</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Position</th>
                        <th>Candidate</th>
                        <th>Number of votes</th>
                      </thead>
                      <tbody>
                        <?php 
                            $position_id = $_GET['position'];
                            //$get_highest_vote = $connection->query("SELECT * FROM position WHERE position_id='$position_id' ANd ");
                            $get_highest_vote = $connection->query("SELECT candidate_it, COUNT(id) as vote_number FROM votes WHERE position_id='$position_id' GROUP BY candidate_it ORDER BY COUNT(id) DESC ");
                            $a = 0;
                            while ($vote_result = mysqli_fetch_array($get_highest_vote)) {
                                $a++;
                                $voted_candidate = $vote_result['candidate_it'];
                                $get_candidate_info = $connection->query("SELECT * FROM candidates WHERE id = '$voted_candidate' LIMIT 1");
                                $voted_candidate_info = mysqli_fetch_array($get_candidate_info);

                                $choosen_candidate = $voted_candidate_info['candidate_name'];
                                $choosen_candidate_vote = $vote_result['vote_number'];
                         ?>
                            <tr>
                              <td><?php echo $a; ?></td>
                              <td><?php echo $_GET['position_name']; ?></td>
                              <td>
                                <?php echo $choosen_candidate;?>
                              </td>
                              <td>
                                <?php echo $choosen_candidate_vote;?>
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