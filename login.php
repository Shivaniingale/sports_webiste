<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="login.css"/>
</head>

<style>
    .form{
        background: rgb(204 199 199);
    }
    
</style>
<body>
<?php
    require('db.php');
    session_start();
    
    // When form submitted, check and create user session.
    if (isset($_POST['prn'])) {
        $prn = stripslashes($_REQUEST['prn']);    // removes backslashes
        $prn = mysqli_real_escape_string($con, $prn);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE prn='$prn'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['prn'] = $prn;
            // Redirect to user dashboard page
            header("Location: stuhome.html");
        } else {
            echo "<script>alert('Can not log in. Check PRN/password');
            window.location.href='index.html'; </script>";

        }
    } else {
?>
<h1>Student Login</h1>

        <div class="container">

	<div class="screen">
		<div class="screen__content">
    <form class="login" method="post" name="login">
            
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
        <input type="text" class="login__input" name="prn" placeholder="Enter your PRN" required/>

				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
        <input type="password" class="login__input" name="password" placeholder="Enter Password" required/>

				</div>
				<button class="button">
        <input class="button__text" type="submit" value="Login" name="submit"/>
				</button>			
                	
        <p class="link">Don't Have An Account? </p>
        <a class="link"href="registration.php">Register Here</a>

		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
  </form>
<?php
    }
?>
</body>
</html>