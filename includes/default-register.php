<?php 
    session_start();
    include "connects.php";

    $studentID = $_POST['studentID'];
    $name = $_POST['name'];
    $webmail = $_POST['webmail'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users`
            (`studentID`, `name`, `webmail`, `username`, `password`)
            VALUES
            ('$studentID', '$name', '$webmail', '$username', '$password')";

    $query = mysqli_query($connect, $sql);

    if ($query === TRUE) {
        header('Location: ../page/php/default.php');
    } else {
        header('Location: ../page/php/default.php');
    };
    mysqli_close($connect);
?>