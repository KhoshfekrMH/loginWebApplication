<header>
    <nav>
        
        <a href="#">
            <img src="img/SignUp.png" alt="" class="logo">
        </a>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Me</a></li>
        </ul>

        <div>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="E-mail/username...">
                <input type="password" name="pwd" placeholder="password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">SignUp</a>
            <form action="includes/logout.inc.php">
                <button type="submit" name="logout-submit">LogOut</button>
            </form>
        </div>
    </nav>


</header>