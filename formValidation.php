<!DOCTYPE html>
<html>

  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        Website: <input type="text" name="website">
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        Gender:
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="male">Male
    </form>
  </body>
  <!--
  The $_SERVER["PHP_SELF"] is a super global variable that returns the
  filename of the currently executing script

  The htmlspecialchars() function converts special characters to HTML entities.
  This means that it will replace HTML characters like < and > with &lt; and &gt;.
  This prevents attackers from exploiting the code by injecting HTML or
  Javascript code (Cross-site Scripting attacks) in forms.
  -->
</html>
