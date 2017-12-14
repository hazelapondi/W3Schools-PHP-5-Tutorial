<!DOCTYPE html>
<html>

  <body>
    <?php
    class Car {
      function Car() {
        $this->model = "VW";
      }
    }

    //create an object
    $herbie = new Car();

    //show object properties
    echo $herbie->model;
    
    //php null value
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    ?>
  </body>
</html>
