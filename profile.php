<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
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
    <div class="gridHome">
        <div class="section1Home">
        <h2 id="username"><?php echo $first_name.' '.$last_name; ?></h2>
        </div>
        <div class="section2Home">
                <div class="form">

                        <h1 id="welcome">Welcome</h1>
                        <p>
                        <?php 
                   
                        // Display message about account verification link only once
                        if ( isset($_SESSION['message']) )
                        {
                            echo $_SESSION['message'];
                            
                            // Don't annoy the user with more messages upon page refresh
                            unset( $_SESSION['message'] );
                        }
                        
                        ?>
                        </p>
                    
                        
                        
                        
                        <a href="logout.php"><button name="logout"/>Log Out</button></a>
        </div>
    </div>
</body>
</html>
