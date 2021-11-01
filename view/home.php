<?php
include __DIR__ . '/../controllers/functions.php';
addEmail();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      media="screen and (min-width: 700px)"
      href="stylesheet.css"
    />
    <link
      rel="stylesheet"
      media="screen and (max-width: 700px)"
      href="stylesheetMobile.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Desktop</title>
  </head>
  <body>
    <div class="split left">
      <nav class="topnav">
        <ul>
          <li>
            <a href="#home"
              ><img
                class="logo"
                src="pictures/logo_picture.png"
                alt="pineapple logo"/><img
                id="otherLogo"
                class="logo"
                src="pictures/logo_text.png"
                alt="pineapple."
            /></a>
          </li>
          <li><a class="navText" href="#">Contact</a></li>
          <li><a class="navText" href="#">How it works</a></li>
          <li><a class="navText" href="#">About</a></li>
        </ul>
      </nav>
      <div id="mobileContainer">
        <h1>Subscribe to newsletter</h1>
        <h3>
          Subscribe to our newsletter and get 10% discount on pineapple glasses.
        </h3>
        <form action="home.php" method="post">
          <input
            id="placeholder"
            type="email" name="userEmail"
            placeholder="Type your email address here..."
          />
          <button id="submit" name="button1" type="submit">
            <strong>&rarr;</strong>
          </button>
          <span role="alert" id="notValidEmail" aria-hidden="true">
            Please provide a valid e-mail address
          </span>
          <span role="alert" id="noEmail" aria-hidden="true">
            Email address is required
          </span>
          <span role="alert" id="noColumbia" aria-hidden="true">
            We are not accepting subscriptions from Colombia emails
          </span>
        
        <p id="termsCheckboxLine">
          <input id="checkbox" type="checkbox"/>
          
          <label for=""
            >I agree to <a href="#" id="termsLink">terms of service</a>
          </label>
          <span role="alert" id="checkboxMessage" aria-hidden="true">
            You must accept the terms and conditions
          </span>
          </form>
        </p>
        <hr />

        <div class="socialButtons">
          <table>
            <tr>
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-youtube"></a>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="split right"></div>
    <script src="script.js"></script>
       

  </body>
</html>
