<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Mock Site With PHP</title>
</head>
<header>
        <img src="img/logo-removebg-preview.png" class="org-logo">
        <nav id="nav">
            <i class="fa-solid fa-xmark"></i>
            <ul class="options"> 
                <h3>Menu</h3>
                <li>Certification</li>
                <li>Career</li>
                <li>Corporate</li>
                <li>Education</li>
            </ul>
        </nav>
        <div class="nav-buttons">
        <?php
        //check if user is login
            if(isset($_SESSION['useruid'])){
                echo '<a href="profile.php"><button class="login">' . $_SESSION['useruid'] .'</button></a>';
                echo '<a href="includes/logout.inc.php"><button class="log">Log Out</button></a>';
            }else{
                echo ' <a href="login.php"><button class="log">Login</button></a>';
            }
        ?>
        </div>
    </header>