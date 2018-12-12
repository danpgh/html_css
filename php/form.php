<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="myinput" value="sss">
      <input type="submit" value="Trimite">
    </form>
    <?php
    if (isset($_POST['myinput'])) echo $_POST['myinput'];
     ?>
  </body>
</html>
