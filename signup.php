<?php
	include_once "header.php";
?>
<title>Sign Up</title>
</head>
<body>
<?php
	include_once "nav.php";
?>
    <section>
        <div class="signup-box">
        <img src="Profile.png" class="profile">
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="POST">
            <h3>Full name:</h3>
            <input type="text" name="name" placeholder="Full Name" maxlength="32">
            <h3>Email:</h3>
            <input type="text" name="email" placeholder="Email" maxlength="128">
            <h3>Username:</h3>
            <input type="text" name="userid" placeholder="username" maxlength="128">
            <h3>Password:</h3>
            <input type="password" name="pwd" placeholder="Password" maxlength="64">
            <h3>Re-enter Password:</h3>
            <input type="password" name="pwdrepeat" placeholder="Re-enter Password" maxlength="64">
            <input type="submit" name="submit" value="Sign Up">
			<?php
        	if(isset($_GET['error'])){
            	if($_GET['error'] == "emptyinput"){
                	echo "<p>Fill in all fields</p>";
            	}else if($_GET['error'] == "usernametaken"){
                	echo "<p>username taken, pick another one!</p>";
            	}else if($_GET['error'] == "none"){
                	echo "<p>Sucessfully made a account</p>";
            	}else if($_GET['error'] == "passwordsdontmatch"){
                	echo "<p>Your passwords did not match</p>";
            	}else if($_GET['error'] == "stmtfailed"){
                	echo "<p>Server Connection failed</p>";
            	}else{
                	echo '<p>Something went wrong, try again.</p>';
            	}
        	}
    ?>
			<a href="login.php" style="margin: 33%;">Have a account?</a>
        </form>
    </div>
    </section>
<?php
	include_once "footer.php";
?>