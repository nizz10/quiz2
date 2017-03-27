<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome</title>
  </head>
  <body>


    <?php if(null == isset($_COOKIE['firstname'])): ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h4>Please join our pokemon club and sign up with us!</h4>
          </div>
          <div class="col-sm-9">
            <form name="registerForm" action="register.php"method="post">
              <fieldset>
                <div class="form-group">
                  <label for="firstname">First Name:</label>
                  <input type="text" class="form-control" name="firstname" value="">
                </div>
                <div class="form-group">
                  <label for="lastname">Last Name:</label>
                  <input type="text" class="form-control" name="lastname" value="">
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" value="">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
              </fieldset>
            </form>
            <br>

          </div>
        </div>
      </div>
    <?php else: ?>
      <p class="lead"><?php echo "Hi, " . $_COOKIE['firstname'] . ", you recently signed up with the email address: " . $_COOKIE['email'] . ", thank you!"; ?></p>
    <?php endif; ?>


  </body>
</html>
