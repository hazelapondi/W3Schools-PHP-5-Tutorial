<!DOCTYPE html>
<html>

  <body>
    <<?php
    $x = 5; //global scope

    function myTest(){
      //using x inside this function will generate an error
      echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";

    function myTest2(){
      $x = 5; //local scope
      echo "<p>Variable x inside function is: $x</p>";
    }
    myTest2();

    //using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>"

    //the global keyword
    $x = 5;
    $y = 24;

    function myTest3(){
      global $x, $y;
      $y = $x + $y;
    }

    myTest3();
    echo $y; //outputs 29

    //alternatively
    $a = 10;
    $b = 14;

    function myTest4(){
      $GLOBAL['b'] = $GLOBAL['a'] + $GLOBAL['b']
    }

    myTest4();
    echo $b; //outputs 24

    ?>

  </body>
</html>
