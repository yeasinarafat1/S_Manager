<?php
/**
 * Login page
 *
 * This page handles the login functionality
 *
 * @author Your Name
 */
include('dbcon.php');

/**
 * Check if the user is already logged in
 *
 * If the user is already logged in, redirect them to the index page
 */
if (isset($_COOKIE['remember_username'])) {
    header('location:index.php');
}

/**
 * Login form
 *
 * This form is used to login to the system
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        body{
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #eae8e8;
        }
        form{
            height: 400px;
            width: 500px;
            background-color: white;
            border-radius: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 15px;
            
        }
        .form-group{
            width: 90%;
        }
        .login-fail{
            color: red;
        }
    </style>
</head>
<body >
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="loginForm" method="post">
        <h2 class="card-title">Login Form</h2>
        <div class="form-group">
            <h3>username</h3>
            <input type="text" class="form-control " name="username" required>
        </div>
        <div class="form-group">
            <h3>password</h3>
            <input type="password" class="form-control " name="password" required>
        </div>
        <input type="submit" class="btn btn-primary" style="width: 90%;" name="login">
        <?php
        /**
         * Handle the login form submission
         *
         * Check if the form has been submitted and if the username and password are valid
         */
        if (isset($_POST["login"])) {
            $f_username = $_POST["username"];
            $f_password = $_POST["password"];
            $query = "SELECT * FROM admin WHERE username='$f_username' && password='$f_password' ";
            $result = mysqli_query($connection,$query);
            $total = mysqli_num_rows($result);
           
            if ($total === 1) {
                $_SESSION['username'] = $f_username;
                setcookie("remember_username",$f_username,time() + 60*60*24);
                header('location:index.php');  
            } else {
                echo "<p class='login-fail'>Login failed</p>";
            }
        }
        ?>
    </form>
 <script src="/js/bootstrap.min.js"></script>   
</body>
</html>

