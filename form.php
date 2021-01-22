<?php

// kad veiktu validacija ikelem funkcijos faila
require './functions.php';

// navigacija
require './include/header_form.php';
?>

<head>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="form.css">
</head>

<!-- FORM sekcija -->
<section class="form-section">

  <div class="container">
    <div class="form-frame">
      <div class="form-text ">
        <h2>IAmDreamer Form</h2>
      </div>

      <div class="form-body">
        <h3>If you want to be a part of our team,<br>please fill in the form below:</h3>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <!-- uzima 50 proc ielutei -->
          <div class="input-group input-group50">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter your name" name="name" id="name" />
            <!-- jeigu klaida ivedimo lauke, rodity klaida -->
            <span style="color:white; font-size:20px" class="error"><?php if ($nameErr)  echo "<br>" . $nameErr ?></span>
          </div>
          <!-- uzima 50 proc ielutei -->
          <div class="input-group input-group50">
            <label for="lname">Surname:</label>
            <input type="text" placeholder="Enter your surname" name="lname" id="lname" />
            <span style="color:white; font-size:20px" class="error"><?php if ($lnameErr)  echo "<br>" . $lnameErr ?></span>
          </div>

          <div class="input-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Enter your email" />
            <!-- jeigu klaida ivedimo lauke, rodity klaida -->
            <span style="color:white; font-size:20px" class="error"><?php if ($emailErr) echo "<br>" . $emailErr ?> </span>
          </div>

          <div class="input-group">
            <label for="message">Your questions, if any:</label>
            <textarea class="textarea" name="message" id="message" cols="30" rows="10" placeholder="Write your questions here..."></textarea>
          </div>

          <button class="submit" name="sendBtn" type="submit">
            <span class="submitColor">Become a member!</span>
          </button>
        </form>

      </div>
    </div>
  </div>

</section>


<?php
//footeris
require_once './include/footer.php';
