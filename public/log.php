<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="login.css" />
  <title>Login Form</title>
</head>

<body>
  <div class="login-wrapper">
    <form action="index.php" class="form" method="POST">
      <h1>Log in</h1>
      <div class="input-group">
        <input type="text" name="mobile" autocomplete="off" required />
        <label>Phone Number</label>
      </div>

      <div class="input-group">
        <input type="password" name="password" autocomplete="off" required />
        <label>Password</label>
      </div>

      <input type="submit" value="login" name="login" class="submit-btn" />
      <a href="#Use-Email" class="Use-Email">Use Email</a>
      <a href="Donationsignup.php" class="Use-Email">Donors</a>
      <a href="needy_registeration.php" class="Use-Email">New register</a>
    </form>

    <div id="Use-Email">
      <form action="index.php" class="form" method="POST">
        <a href="#" class="close">&times;</a>
        <h2>Log in</h2>
        <div class="input-group">
          <input type="email" name="email" autocomplete="off" required />
          <label>Email Id </label>
        </div>

        <div class="input-group">
          <input type="password" name="password" autocomplete="off" required />
          <label>Password</label>
        </div>

        <input type="submit" value="login" value="login" class="submit-btn" />
      </form>
    </div>
  </div>
</body>

</html>