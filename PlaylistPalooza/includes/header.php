<!DOCTYPE html>
<html>

<head>
  <link href="images/icon2.png" rel="icon" />

  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <!-- Link to your custom CSS file -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/sidebar.css" />

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
        <?php if ($_SESSION['loggedIn'] ?? false) { ?>
          <a class="nav-link" href="#" id="myAccountLink">My Account</a>
        <?php } else { ?>
          <a class="nav-link" href="login.php">Sign In</a>
        <?php } ?>
      </div>
    </div>
  </nav>

  <!-- Side Bar -->

  <div class="offcanvas offcanvas-end" id="myAccountSidebar">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">My Account</h1>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p>Welcome!
        <?= $_SESSION['name'] ?>
      </p>
      <br />
      <p><a href="tickets.php">My Tickets</a></p>
      <p><a href="updateProfile.php">Update Profile</a></p>
      <p><a href="logout.php">Sign Out</a></p>
    </div>
  </div>

  <!-- Include Bootstrap JavaScript library -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- Add the JavaScript code for the sidebar interaction -->
  <script>
    // Get references to the link and sidebar elements
    const myAccountLink = document.getElementById("myAccountLink");
    const myAccountSidebar = new bootstrap.Offcanvas(
      document.getElementById("myAccountSidebar")
    );

    // Add a click event listener to the "My Account" link
    myAccountLink.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent the link from navigating
      myAccountSidebar.show(); // Show the sidebar
    });
  </script>

</body>

</html>