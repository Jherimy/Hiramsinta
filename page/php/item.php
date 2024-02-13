<?php
session_start();
include "../../includes/connects.php";
$currentPage = 'BORROW';

$borrowItemID = $_POST['borrowItemID'];
$borrowItem = $_POST['borrowItem'];
$borrowDescription = $_POST['borrowDescription'];
$borrowPlace = $_POST['borrowPlace'];
$borrowDate = $_POST['borrowDate'];
$borrowTime = $_POST['borrowTime'];
$borrowPrice = $_POST['borrowPrice'];
$borrowImage = $_POST['borrowImage'];
$borrowStudent = $_POST['borrowStudent'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
    <title>LEND</title>
    <link rel="stylesheet" href="../css/item.css">
</head>
<body>
    <?php include "bar.php"; ?>
    <main>
        <form action="../../includes/borrow-submit.php" method="POST" enctype="multipart/form-data">  
            <input value="<?php echo $borrowItemID ?>" type="hidden" name="borrowSubmit">
            <div>
                <img src="../<?php echo $borrowImage ?>">
            </div>
            <div>
                <p class="name"><?php echo $borrowStudent ?></p>
                <p><?php echo $borrowItem ?></p>
                <p><?php echo $borrowDescription ?></p>
                <label>
                    <i class='bx bxs-edit-location'></i>
                    <p><?php echo $borrowPlace ?></p>
                </label>
                <label><span>₱</span>
                    <p><?php echo $borrowPrice === 0 ? 'FREE' : $borrowPrice ?></p>
                </label>
                <p><?php echo (new DateTime($borrowDate))->format('l, F jS, Y') . '   ' . 
                (DateTime::createFromFormat('H:i:s', $borrowTime))->format('g:i A') ?></p>
                <input type="submit" value="BORROW ITEM">
            </div>
        </form>
    </main>
    <script src="../js/item.js"></script>
</body>
</html>
