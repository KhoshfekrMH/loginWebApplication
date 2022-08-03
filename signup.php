<?php
require "header.php"
?>

<link rel="stylesheet" href="style.css">
<main style="text-align: center; margin-top:20px;">
  <h1>SignUp</h1>
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<p style="color: red;">Fill in all fields</p>';
    } 
    else if($_GET['error'] == "invalidmailuid") {
      echo '<p style="color: red;">Invalid username and E-Mail</p>';
    }
    else if($_GET['error'] == "invaliduid") {
      echo '<p style="color: red;">Invalid Username</p>';
    } 
    else if($_GET['error'] == "invalidmail") {
      echo '<p style="color: red;">Invalid E-Mail</p>';
    } 
    else if($_GET['error'] == "passwordcheck") {
      echo '<p style="color: red;">Your Password do not match</p>'; 
    }
    else if($_GET['error'] == "usertaken") {
      echo '<p style="color: red;">Username is already taken</p>';
    } 
  } 
  else if($_GET["signup"] == "success") {
    echo '<p style="color: green;">SignUp Successful!</p>';
  }
  ?>

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
      <input type="password" name="pwd" class="form-control middle" id="PasswordInput" placeholder="Password">
      <label for="PasswordInput">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pwd-repeat" class="form-control bottom" id="PasswordRepeat" placeholder="Password Repeat">
      <label for="PasswordRepeat">Password Repeat</label>
    </div>

    <button type="submit" name="signup-submit" class="w-100 btn btn-lg btn-primary">SignUp</button>
  </form>
</main>

<?php
require "footer.php"
?>