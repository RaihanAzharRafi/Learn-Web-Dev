<div class="login-page">
  <link rel="stylesheet" href="form_login.css">
  <div class="container-main">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center">
    <h1>Please Login</h1>
  </div>
</div>
</div>
  <div class="form">
    <!-- <form class="register-form" action="cek_login.php" method="post">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="cek_login.php">Sign In</a></p>
    </form> -->
    <form class="login-form" action="cek_login.php" method="POST">
      <input type="text" placeholder="username" name="user"/>
      <input type="password" placeholder="password" name="pass"/>
      <button type="submit">login</button>
    </form>
  </div>
</div>
</nav>
