<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
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
<div class="gridHome">
        <div class="section1Home"></div>
        <div class="section2Home">
              <h1 id="welcome">You have been logged out</h1>
              <a href="index.php"><button class="button button-block"/>Home</button></a>
        </div>
    </div>
</body>
</html>
