<?php
require "header.php"
?>

<link rel="stylesheet" href="style.css">
<main>
<form class="formCenter" action="includes/signip.inc.php" merthod="post">
    <h1 class="h3 mb-3 fw-normal">Please sign in!</h1>

    <div class="form-floating">
      <input type="text" name="uid" class="form-control top" id="floatingInput" placeholder="Username">
      <label for="floatingInput">User Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control middle" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd" class="form-control middle" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd-repeat" class="form-control bottom" id="floatingPassword" placeholder="Repeat Password">
      <label for="floatingPassword">Repeat Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup-submit">SignUp</button>
</form>
</main>

<?php
require "footer.php"
?>