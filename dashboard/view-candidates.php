<?php include('header.php') ?>
    <?php 
        if (isset($_GET['position'])) {
            $position = $_GET['position'];
            $get_position = $connection->query("SELECT * FROM position WHERE id='$position'");
            $check=mysqli_num_rows($get_position);
            if ($check  < 1) {
              echo "<script>window.location.href='categories.php';</script>";
            }else{
              $data=mysqli_fetch_array($get_position);
            }
        }else{
          echo "<script>window.location.href='categories.php';</script>";
        }
    ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">VIEW CANDIDATES ON POSITION -  <?php echo $data['name']; ?></a>
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
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add Candidate</h4>
                  <p class="card-category"> Add Candidate</p>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="" class="form-horizontal form-bordered" method="POST" autocomplete="off">
                        <input type="text" class="form-control" name="candidate_name" title="candidate" placeholder="Candidate Name" required="">
                        <input type="hidden" class="form-control" name="position_name" title="candidate" placeholder="Candidate Position" value="<?php echo $data['name']; ?>">
                        <input type="hidden" class="form-control" name="position_id" title="candidate" placeholder="Candidate Position" value="<?php echo $data['id']; ?>">
                        <input type="text" class="form-control" name="" title="candidate" placeholder="Candidate Position" value="<?php echo $data['name']; ?>" disabled="">
                        <input type="submit" class="form-control" name="add_candidate" value="Add Position">
                    </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Candidate on this position</h4>
                  <p class="card-category"><?php echo $data['name'] ?> Position</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Candidate Name</th>
                        <th>Candidate Position</th>
                        <!-- <th>Actions</th> -->
                      </thead>
                      <tbody>
                        <?php 
                            $position_id = $data["id"];
                            $get_position_candidates = $connection->query("SELECT * FROM candidates WHERE candidate_position ='$position_id' ");
                            while ($data=mysqli_fetch_array($get_position_candidates)) {
                         ?>
                            <tr>
                              <td><?php echo $data['id']; ?></td>
                              <td><?php echo $data['candidate_name']; ?></td>
                              <td><?php echo $data['candidate_position_name']; ?></td>
                              <!-- <td>
                                <a href="view-candidates.php">VIEW ALL CANDIDATES</a>
                              </td> -->
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