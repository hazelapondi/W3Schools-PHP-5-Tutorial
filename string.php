<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo strlen("Hello world!"); //outputs 12

    echo str_word_count("Hello world!"); //outputs 2

    echo strrev("Hello world!");

    echo strpos("Hello world!", "world"); //outputs 6

    echo str_replace("world", "Dolly", "Hello world!"); //outputs Hello Dolly

    //creating a php constant
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    //constants are global
    define("SALUTATION", "Welcome to the rest of your life.");

    function myTest() {
      echo SALUTATION;
    }

    myTest();
    ?>
  </body>
</html>
