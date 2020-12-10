<?php
    session_start();
    require 'includes/dbh.php';
    require 'includes/webValidator.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/navbarActiv.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Gamesite</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
<a href="frontpage.php?user=<?php echo $_SESSION['userUid']; ?>">
        <img id="logo" src="img/logo.png" alt="logo">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto" id="nav">
      <li class="nav-item">
        <a class="nav-link text-info" href="frontpage.php?user=<?php echo $_SESSION['userUid']; ?>"><h5>Home</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="games.php?user=<?php echo $_SESSION['userUid']; ?>"><h5>Games</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="contact.php?user=<?php echo $_SESSION['userUid']; ?>"><h5>Contact</h5></a>
      </li>
    </ul>
    <h5 id="username" class="d-md-none d-lg-block">Welcome <?php echo $_SESSION['userUid']; ?></h5>
      <button id="logout-btn" class="btn" type="submit"><a href="profile.php?user=<?php echo $_SESSION['userId']?>"><h6>Profile</h6></a></button>
    <form action="includes/logout.php" method="post">
      <button id="logout-btn" class="btn" type="submit" name="logout-submit"><h6>Logout</h6></button>
    </form>
  </div>
</nav> 
        
</nav>