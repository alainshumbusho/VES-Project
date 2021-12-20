<?php 
  include('controller.php');
  // $file_name=explode('/',$_SERVER['QUERY_STRING']);
  $file_name=explode('/',$_SERVER['REQUEST_URI']);
  // print_r($file_name[2]);
  if (isset($file_name[2])) {
    $file_name=$file_name[2];
  }
  else{
    $file_name='index.php';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VVS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto" style="font-family: 'Montserrat', sans-serif;"><span>Virtual</span> Voting System</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li <?php if ($file_name == 'index.php') { echo 'class="menu-active"';} ?> ><a href="index.php">Home</a></li>
          <li <?php if ($file_name == 'about.php') { echo 'class="menu-active"';} ?> ><a href="about.php">About</a></li>
          <li <?php if ($file_name == 'vote.php') { echo 'class="menu-active"';} ?> ><a href="vote.php">Vote</a></li>
          <li <?php if ($file_name == 'contactus.php') { echo 'class="menu-active"';} ?> ><a href="contactus.php">Contact us</a></li>
          <li <?php if ($file_name == 'signin.php') { echo 'class="menu-active"';} ?> ><a href="signin.php">SignIn</a></li>
          <li <?php if ($file_name == 'signup.php') { echo 'class="menu-active"';} ?> ><a href="signup.php">SignUp</a></li>

          <?php if (isset($_SESSION['user_id'])) {if ($_SESSION['user_role'] == 'admin') {?>
            <li class="menu-has-children">
                <a href="#">MAIN ADMINISTARTOR</a>
                <ul>
                  <li><a href="dashboard/dashboard.php">Dashboard</a></li>
                </ul>
            </li>
          <?php }else{?>
            <li class="menu-has-children">
                <a href="#"><?php echo $_SESSION['user_first_name'].' '.$_SESSION['user_last_name']; ?></a>
                <ul>
                  <li><a href="account.php">Account</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>
          <?php }} ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->