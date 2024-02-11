<?php 
    session_start();
    include "connects.php";

    date_default_timezone_set('Asia/Manila');

    $lenderID = $_SESSION['studentID'];
    $lendItem = $_POST['lendItem'];
    $lendDescription = $_POST['lendDescription'];
    $lendPlace = $_POST['lendPlace'];
    $lendDate = date("Y-m-d");
    $lendTime = date("H:i:s");
    $lendPrice = $_POST['lendPrice'];

    $lendImage = $_FILES['lendImage'];
    $imageName = $lendImage['name'];
    $imageTemp = $lendImage['tmp_name'];
    $imageExt = explode('.', $imageName);;
    $imageActualExt = strtolower(end($imageExt));

    $imageNewName = uniqid('', true) . "." . $imageActualExt;   
    $imagePath = '../uploads/item/' . $imageNewName;
    move_uploaded_file($imageTemp, $imagePath);


    $sql = "INSERT INTO `lend`
            (`lenderID`, `item`, `description`, `place`, `lenddate`, `lendtime`, `price`, `image`)
            VALUES
            ('$lenderID', '$lendItem', '$lendDescription', '$lendPlace', '$lendDate', '$lendTime', '$lendPrice', '$imagePath');";

    $query = mysqli_multi_query($connect, $sql);

    if ($query === TRUE) {
        header('Location: ../page/php/lend.php');
    } else {
        header('Location: ../page/php/lend.php');
    };
    mysqli_close($connect);
?>