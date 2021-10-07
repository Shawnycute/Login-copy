<?php
	include_once 'header.php';
?>
<title>Welcome</title>
</head>
<body>
<?php
	include_once 'nav.php';
?>
            <?php
                if(isset($_SESSION['useruid'])){
                    echo'<h1 class="introduction"> Hello ' . $_SESSION['useruid'] . '!</h1>';
                }else{
					header('location: ../index.php');
                }
            ?>
            <section class="profile-box">
                <br><br><br>
                <div class="start-pwd-box">
                    <h3>Your username is:</h3>
                    <?php
                    echo '<p>'. $_SESSION['useruid'] . '</p>';
                    ?>
                    <br>
                    <button type="submit" name="changeusername" class="button"><a href="changename.php">Change username</a></button>
                    <h3>Your Full Name is:</h3>
                    <?php
                    echo '<p> </p>';
                    ?>
                    <br>
                    <button type="submit" name="changefullname"><a href="changfullname.php" class="button">Change Full name</a></button>
                    
                </div>
                <div class="pwd-box">
                <h3>Your Password is:</h3>
                    <?php
                    echo '<p>'. $_SESSION['userpwd'] . '</p>';
                    ?>
                    <br>
                </div>
                <div class="pwd-box"></div>
            </section>
<?php
	include_once 'footer.php';
?>