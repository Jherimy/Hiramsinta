<?php 
    session_start();
    include "connects.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students
            WHERE 
            password='$password'
            AND
            (username='$username' OR webmail='$username')";

    $query = mysqli_query($connect, $sql);

    if (mysqli_num_rows($query) != 0) {
        $data = mysqli_fetch_assoc($query);
        $_SESSION['studentID'] = $data['studentID'];
        $_SESSION['name'] = $data['studentname'];
        $_SESSION['webmail'] = $data['webmail'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['college'] = $data['college'];
        $_SESSION['course'] = $data['course'];
        $_SESSION['age'] = $data['age'];
        $_SESSION['year'] = $data['year'];
        $_SESSION['sex'] = $data['sex'];

        header('Location: ../page/php/home.php');
    } else {
        header('Location: ../page/php/default.php');
    };
    mysqli_close($connect);
?>