<?php
    session_start();
    include "../../includes/connects.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" hreg="../css/home.css">
</head>
<body>
    <?php  
        echo $_SESSION['studentID'];
        echo $_SESSION['name'];
        echo $_SESSION['webmail'];
        echo $_SESSION['username'];
        echo $_SESSION['password'];
    ?>
</body>
</html>