<!DOCTYPE html>
<html>

  <body>
    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    //outputting text and variables with the echo statement
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 8;
    $y = 9;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
    var_dump($x) //returns the data type and value

    //similarly for the print statement

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
  </body>
</html>
