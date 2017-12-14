<!DOCTYPE html>
<html>

  <body>
  <?php
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  }
    
    $s = date("H");

  if ($s < "10") {
    echo "Have a good morning!";
  } elseif ($s < "20") {
    echo "Have a great day!";
  } else {
    echo "Have a good night!";
  }

  $favcolor = "red";

  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;

    default:
      echo "Your favorite color is neither red, blue nor green!";
      break;
  }  
  ?>
  </body>
</html>
