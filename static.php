<!DOCTYPE html>
<html>
  <body>
    <?php
    function myTest() {
      static $x = 0;
      echo $x;
      $x++;
    }

    myTest();
    myTest();
    myTest();
    /*
    each time the function is called, that variable will still
    have the information it contained form the last time the function was called.
    The variable is still local to the function.
    */
    ?>
  </body>
</html>
