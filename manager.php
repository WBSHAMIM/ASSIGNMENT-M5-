<?php

session_start();
if(! isset ($_SESSION["email"])){
    header("location: login.php");
}

?>

<html>
    <body>
        <h1>This is manager: <?php echo $_SESSION["email"]; ?> </h1>
        <a href="logout.php">Logout</a>
    </body>
</html>