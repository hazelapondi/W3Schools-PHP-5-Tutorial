<!DOCTYPE html>
<html>

  <body>
    <?php
    //indexed arrays
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo count($cars); //to get the length

    //to loop through
    for($x = 0;$x < $arrlength; $x++) {
      echo $cars[$x];
      echo "<br>";
    }

    //associative arrays use named keys that you assign to them
    $age = array("Patel"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Patel is " . $age['Patel'] . " years old.";

    foreach ($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    ?>
  </body>
</html>
