<?php
    session_start();
    include "../../includes/connects.php";
    $currentPage = 'BORROW';

    $sort = 'item';
    $order = 'ASC';

    $query = "SELECT * FROM lend;";
    $result = mysqli_query($connect, $query);
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
    <link rel="stylesheet" href="../css/borrow.css">
</head>
<body>
    <?php include "bar.php"; ?>
    <main>
        <form action="" method="POST">
            <label>
                <input type="text" name="search" placeholder="SEARCH ITEM" autocomplete="off" spellcheck="false">
                <i class='bx bx-search'></i>
            </label>
            <div class="filter">
                <p>ITEM</p>
                <p>PRICE</p>
                <p>DATE</p>
                <p>ASCENDING</p>
                <p>DESCENDING</p>
            </div>
            <div class="itemlist">
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div>';
                        echo '<img src="' . '../' . $row['image']. '">';
                        echo '<p>' . $row['item'] . '</p>';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '<p>₱ ' . $row['price'] . '</p>';
                        echo '<p>' . $row['place'] . '</p>';
                        echo '</div>';
                    }
                ?>
            </div>
        </form>
    </main>
    <script src="../js/borrow.js"></script>
</body>
</html>