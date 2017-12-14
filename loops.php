<!DOCTYPE html>
<html>

  <body>
  <?php
  //while loop
  $x = 1;

  while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
  }

  $y = 3;

  //do...while loop
  do {
    echo "The number is: $y <br>";
    $y++;
  } while ($y <= 10);
  /*
  for the do while loop the condition is tested AFTER executing the statements
  within the loop. Meaning it would execute its statements at least once,
  even if the condition is false the first time.
  */

  //for loop
  for ($z=0; $z <= 10 ; $z++) {
    echo "The number is: $z <br>";
  }

  //foreach loop
  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $key => $value) {
    echo "$value <br>";
  }
  ?>
  </body>
</html>
