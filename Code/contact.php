<?php

// include "header.html";

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // check if required fields are empty.
  if (empty($name) || empty($email) || empty($message)) {
    $errorMessage = "Please fill in all the required fields.";
  }

  // Process the form data if there are no errors.
  if (empty($errorMessage)) {
    $successMessage = "Thank you for your submission!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style_contact.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!-- Main -->
    <section class="main">
      <h1>Playlist Palooza</h1>
    </section>

    <!-- Vision -->
    <section class="vision">
      <h2>Our Vision</h2>
      <br />
      <p>
        “We believe live events are powerful experiences<br />
        that unite humans.”
      </p>
    </section>

    <!-- Information -->
    <section class="info">
      <div class="info-row">
        <div class="info-column">
          <div class="info-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40px"
              height="40px"
              fill="currentColor"
              class="bi bi-geo-alt"
              viewBox="0 0 16 16"
            >
              <path
                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
              />
              <path
                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
              />
            </svg>
            <div class="info-container">
              <h3>Address</h3>
              <p class="info-content">123 Sherbrooke O, Montréal, QC</p>
            </div>
          </div>
        </div>

        <div class="info-column">
          <div class="info-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40px"
              height="40px"
              fill="currentColor"
              class="bi bi-clock"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"
              />
              <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"
              />
            </svg>
            <div class="info-container">
              <h3>Opening Hours</h3>
              <p class="info-content">
                MON-SAT 10:00 ~ 17:00<br />
                SUNDAY CLOSED
              </p>
            </div>
          </div>
        </div>

        <div class="info-column">
          <div class="info-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40px"
              height="40px"
              fill="currentColor"
              class="bi bi-envelope"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
              />
            </svg>
            <div class="info-container">
              <h3>Email</h3>
              <p class="info-content">info@pp.com</p>
            </div>
          </div>
        </div>

        <div class="info-column">
          <div class="info-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="40px"
              height="40px"
              fill="currentColor"
              class="bi bi-telephone"
              viewBox="0 0 16 16"
            >
              <path
                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
              />
            </svg>
            <div class="info-container">
              <h3>Phone</h3>
              <p class="info-content">514-123-4567</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us-->
    <div class="contact-container">
      <section class="contact">
        <h2>Contact Us</h2>
        <br />
        <form method="POST" action="contact.php">
          <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" />
          </div>

          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="inputEmail"
              name="email"
              placeholder="name@example.com"
            />
          </div>

          <div class="mb-3">
            <label for="inputMessage" class="form-label">Message</label>
            <textarea
              class="form-control"
              id="inputMessage"
              name="message"
              rows="4"
              aria-describedby="messageHelpBlock"
            ></textarea>
            <div id="messageHelpBlock" class="form-text">
              If you leave any messages, we will get back to you as soon as
              possible.
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </section>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


<?php

if (!empty($errorMessage)) {
  echo '<div class="alert alert-danger">' . $errorMessage . '</div>';
}
if (isset($successMessage)) {
  echo '<div class="alert alert-success">' . $successMessage . '</div>';
}

// include "footer.html";

?>
