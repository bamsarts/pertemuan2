<!DOCTYPE html>
<html lang="en"> 
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login ke Rumah Koding</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Lupa password ? <a href="index.html">Klik disini</a>.</p>
    </div>
  </section>
</body>
</html>
