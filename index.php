<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Even Number Display Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Range of Even Numbers - PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Displaying a Range of Even Numbers</h1>"; ?>
    <!-- Div for background colour -->
    <div id="blue">
      <?php
        echo "<h3>Welcome!</h3>";
        echo "<p>Welcome! Input a minimum and maximum number below, and we will display all the even numbers ranging between the minimum and maximum you specify.</p>";
      ?>
      <?php echo "<h3>Your Input:</h3>"; ?>
      <!-- Form for user input -->
      <form action="./numbers.php" method="post" target="results">
        <label for="min number">Enter a minimum number:</label>
        <input type="number" step="1" name="min-number" placeholder="Minimum"><br><br>
        <label for="max number">Enter a maximum number:</label>
        <input type="number" step="1" name="max-number" placeholder="Maximum"><br><br>
        <input type="submit" value="Submit Numbers" id="submit-button">
      </form>
    </div>
    <!-- Div for yellow background colour -->
    <div id="yellow">
      <!-- Iframe to display results -->
      <iframe id="results" name="results"></iframe>
    </div>
  </body>
</html>