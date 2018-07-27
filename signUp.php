<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
    <script src="js/main.js"></script>
</head>
<body>
    <div class="grid">
        <div class="section1">
             <a href="index.html"><img id="logoTop" src="assets/images/logoLogin.png"></a>
                <div class="container">
                     <form action="index.php" method="post" autocomplete="off">
                        <input type="text" required autocomplete="off" name='firstname' placeholder="FIRST NAME">
                        <input type="text" required autocomplete="off" name='lastname' placeholder="LAST NAME">
                        <input type="email" required autocomplete="off" name='email' placeholder="EMAIL">
                        <input type="password" required autocomplete="off" name='password' placeholder="PASSWORD">
                        <button id="login" type="submit" name="register" >REGISTER</button>
                    </form>
                    <p id="newMember">Already a memeber login <a href="index.php"><span id="underline" >here</span></a>
                </div>
        </div>
     </div>
</body>
</html>
