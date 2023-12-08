<?php 
    session_start();
    include "connects.php";

    $studentID = $_POST['studentID'];
    $name = $_POST['name'];
    $webmail = $_POST['webmail'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $year = $_POST['year'];
    $sex = $_POST['sex'];
    $college = $_POST['college'];
    $course = $_POST['course'];

    $sql = "INSERT INTO `users`
            (`studentID`, `name`, `webmail`, `username`, `password`)
            VALUES
            ('$studentID', '$name', '$webmail', '$username', '$password');
            INSERT INTO `students`
            (`studentID`, `college`, `course`, `year`, `age`, `sex`) 
            VALUES 
            ('$studentID','$college','$course','$year','$age','$sex')";

    $query = mysqli_multi_query($connect, $sql);

    if ($query === TRUE) {
        header('Location: ../page/php/default.php');
    } else {
        header('Location: ../page/php/default.php');
    };
    mysqli_close($connect);
?>