<?php
    session_start();
    include "../../includes/connects.php";
    $currentPage = 'LEND';
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
    <link rel="stylesheet" href="../css/lend.css">
</head>
<body>
    <?php include "bar.php"; ?>
    <main>
        <form action="../../includes/lend-submit.php" method="POST" enctype="multipart/form-data">  
            <div>
                <img>
                <label for="lendImage" onclick="uploadImage()"><i class='bx bxs-cloud-upload' ></i>UPLOAD PRODUCT</label>
                <input type="file" name="lendImage" accept=".png, .jpg, .gif, .jpeg" onchange="changeImage()" required>
            </div>
            <div>
                <p><?php echo $_SESSION['name'] ?></p>
                <input type="text" name="lendItem" placeholder="ENTER ITEM NAME" autocomplete="off" spellcheck="false" required>
                <textarea name="lendDescription" placeholder="DESCRIPTION" autocomplete="off" data-gramm='false' spellcheck="false" required></textarea>
                <label>
                    <i class='bx bxs-edit-location'></i>
                    <input type="text" name="lendPlace" placeholder="ENTER PICK UP LOCATION e.g., PUP CEA Building" autocomplete="off" spellcheck="false" required>
                </label>
                <label><span>₱</span>
                    <input type="number" name="lendPrice" min="0" oninput="resizeInput(this)">
                </label>
                <p>FREE TO RENT? LEAVE IT BLANK OR ENTER 0</p>
                <input type="submit" value="LEND ITEM">
            </div>
        </form>
    </main>
    <script src="../js/lend.js"></script>
</body>
</html>