<?php
	include_once "header.php";
?>
<title>Login</title>
</head>
<body>
<?php
	include_once "nav.php";
?>
<section>
<div class="login-box">
        <img src="Profile.png" class="profile">
        <h1>Login</h1>
        <form action="includes/login.inc.php" method="POST">
            <h3>Username:</h3>
            <input type="text" name="userid" placeholder="username" maxlength="20">
            <h3>Password:</h3>
            <input type="password" name="pwd" placeholder="Password" maxlength="25">
            <input type="submit" name="submit" value="Log In">
			<br>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyinput"){
                    echo "<p>Fill in all fields</p>";
                }else if($_GET['error'] == "wrongusername"){
                    echo "<p>Try again the username was not correct</p>";
                }else if($_GET['error'] == "none"){
                    echo "<p>Sucessfully logged in!</p>";
                }else if($_GET['error'] == "wrongpassword"){
                    echo "<p>You password was wrong</p>";
                }else{
                    echo '<p>Something went wrong, try again.</p>';
                }
            }
        ?>
            <a href="forgot-password.php" style="margin: 31%;">Forgot Password?</a><br>
            <a href="signup.php" style="margin: 26.5%;">Don't have a account?</a>
        </form>
    </div>
</section>
<?php
	include_once "footer.php";
?>