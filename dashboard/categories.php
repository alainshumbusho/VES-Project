<?php include('header.php') ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Catagories</a>
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
                  <h4 class="card-title ">Add Position</h4>
                  <p class="card-category"> Add Position</p>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="" class="form-horizontal form-bordered" method="POST" autocomplete="off">
                        <input type="text" class="form-control" name="postion_name" title="Position Nmae" placeholder="Position Name" required="">
                        <input type="submit" class="form-control" name="add_position" value="Add Position">
                    </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">VVS Catagories</h4>
                  <p class="card-category"> List of user who signup</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Position Name</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                        <?php 
                            $get_position = $connection->query("SELECT * FROM position");
                            while ($data=mysqli_fetch_array($get_position)) {
                         ?>
                            <tr>
                              <td><?php echo $data['id']; ?></td>
                              <td><?php echo $data['name']; ?></td>
                              <td>
                                <a href="view-candidates.php?position=<?php echo $data['id']; ?>" style="background-color:black;border-radius: 10px;padding: 2px 10px 2px 10px;color: white">VIEW ALL CANDIDATES</a>
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