<?php
require "header.php"
?>

<link rel="stylesheet" href="style.css">
<main>
  <form class="formCenter" action="includes/signup.inc.php" method="POST">
    <div class="form-floating">
      <input type="text" name="uid" class="form-control top" id="UserInput" placeholder="Username">
      <label for="UserNameInput">User Name</label>
    </div>

    <div class="form-floating">
      <input type="email" name="mail" class="form-control middle" id="MailNameInput" placeholder="E-Mail">
      <label for="MailNameInput">Email Address</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd" class="form-control middle" id="PasswordInput">
      <label for="PasswordInput">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd-repeat" class="form-control bottom" id="PasswordRepeat">
      <label for="PasswordRepeat">Password Repeat</label>
    </div>

    <button type="submit" name="signup-submit" class="w-100 btn btn-lg btn-primary">SignUp</button>
  </form>
<!-- <form class="formCenter" action="includes/signup.inc.php" merthod="POST">
    <h1 class="h3 mb-3 fw-normal">Please sign in!</h1>


    <div class="form-floating">
      <input type="password" name="pwd" class="form-control middle" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd-repeat" class="form-control bottom" id="floatingPassword" placeholder="Repeat Password">
      <label for="floatingPassword">Repeat Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup-submit">SignUp</button>
</form> -->
</main>

<?php
require "footer.php"
?>