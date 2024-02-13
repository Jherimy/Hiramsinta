<?php 
    session_start();
    include "connects.php";
    
    date_default_timezone_set('Asia/Manila');
    
    $borrowSubmit = $_POST['borrowSubmit'];
    $borrowerID = $_SESSION['studentID'];
    $borrowDate = date("Y-m-d");
    $borrowTime = date("H:i:s");

    $sql = "INSERT INTO `borrow`
            (`itemID`, `borrowerID`, `date`, `time`)
            VALUES
            ('$borrowSubmit', '$borrowerID', '$borrowDate', '$borrowTime');
            UPDATE lend 
            SET availability = 'NO' WHERE itemID = $borrowSubmit";

    $query = mysqli_multi_query($connect, $sql);

    if ($query === TRUE) {
        header('Location: ../page/php/borrow.php');
    } else {
        header('Location: ../page/php/borrow.php');
    };
    mysqli_close($connect);
?>