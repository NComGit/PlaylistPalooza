<!DOCTYPE html>
<html>

<head>
  <link href="images/icon2.png" rel="icon" />

  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <!-- Link to your custom CSS file -->
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Link to google font api -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;400&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-------------------->
  <!-- NAVIGATION BAR -->
  <!-------------------->

  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
      <!-- Logo on the left (replace this with your logo) -->
      <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="Playlist Palooza" height="39"
          width="245" /></a>

      <?php
      include('search.php');
      ?>

      <!-- Navigation links -->
      <div class="navbar-nav">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="contact.php">Contact Us</a>
        <?php if ($userIsLoggedIn) { ?>
          <a class="nav-link" href="logout.php">Sign Out</a>
        <?php } else { ?>
          <a class="nav-link" href="login.php">Sign In</a>
        <?php } ?>
      </div>
    </div>
  </nav>

</body>

</html>