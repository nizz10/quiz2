<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
  </head>
  <body>

    <?php if (null != $_POST): ?>
      <p class="lead">Welcome! Thank you for registering with us!!!</p>
      <?php
      // $cookie = $_COOKIE['firstname'];
      // echo($cookie);
      $data = $_POST;
      // echo $data['firstname'];

      $cookie_name = "firstname";
      $cookie_value = $data['firstname'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      $cookie_name = "lastname";
      $cookie_value = $data['lastname'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      $cookie_name = "email";
      $cookie_value = $data['email'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    else:?>
      <p class="lead">Sorry! You should only access this page by submitting the registering form.</p>
    <?php endif; ?>

  </body>
</html>
