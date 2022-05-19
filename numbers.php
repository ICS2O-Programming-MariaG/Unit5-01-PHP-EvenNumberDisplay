<?php
  //initializing the numbers and message variable to an empty string
  $numbers = "";
  $message = "";

  //getting the user values for the minimum and maximum numbers
  $minNumber = intval($_POST['min-number']);
  $maxNumber = intval($_POST['max-number']);

  //initializing the counter variable to the minNumber
  $counter = $minNumber;

  //if statement checks if minNumber > maxNumber (there is an error)
  if ($minNumber > $maxNumber) {
    $message = "Please make sure the minimum is less than or equal to the maximum.";
  }
  //else, complete while loop to create list of even numbers between min and max
  else {
    //while loop that specifies the range, so the code within the loop executes as long as the counter is greater than or equal to the minimum and less than or equal to the maximum
    while (($counter >= $minNumber) && ($counter <= $maxNumber)) {
      //if statement checks for even numbers, for as long as the counter is still less than or equal to the maximum
      //number % 2 == 0 makes sure remainder is 0, indicating that number is divisible by 2 (even number)
      if (($counter <= $maxNumber) && ($counter % 2 == 0)) {
        $numbers = $numbers . $counter . "<br>";
      }
      $counter = $counter + 1;
      $message = "Here is a list of all the even numbers between the minimum and maximum that you entered:<br><br>$numbers";
    }
  }

  //displaying the results (the range of even numbers) back to the user
  echo "$message";
?>
