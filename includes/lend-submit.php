<?php 
    session_start();
    include "connects.php";

    $lender = $_SESSION['studentID'];

    $lendImage = $_POST['lendImage'];
    $lendName = $_POST['lendName'];
    $lendDescription = $_POST['lendDescription'];
    $lendPlace = $_POST['lendPlace'];
    $lendPrice = $_POST['lendPrice'];

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