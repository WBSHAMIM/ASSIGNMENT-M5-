<?php

session_start();

$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';

$roleError = "";

$fp = fopen('data/users.txt','r');

$allroles = array();
$emails = array();
$passwords = array();

while ($line = fgets($fp)) {

    $allUserValue = explode(',', $line); 
    
    array_push($allroles, trim($allUserValue[0]));
    array_push($emails, trim($allUserValue[1]));
    array_push($passwords, trim($allUserValue[2]));

}

fclose($fp);

for ($i = 0; $i < count($allroles); $i++) {

        if($emails[$i] == $email && $passwords[$i] == $password) {
            $_SESSION["role"] = $allroles[$i];
            $_SESSION["email"] = $emails[$i];
            header("location: index.php");
        }
        
        else {
            $roleError = "Email & Password are not match";
        }

  
}
?>

<html>
    <body>
        <form action="" method="POST">
            <h2>Login Form</h2>
            <input type="email" name="email" placeholder="email">
            </br></br>
            <input type="password" name="password" placeholder="password">
            </br></br>
            <button type="submit">LOGIN</button>

            <?php echo $roleError;?>

        </form>
    </body>
</html>