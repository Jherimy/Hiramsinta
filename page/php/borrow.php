<?php
session_start();
include "../../includes/connects.php";
$currentPage = 'BORROW';

$sort = isset($_POST['sort']) ? $_POST['sort'] : 'item';
$order = isset($_POST['order']) ? $_POST['order'] : 'ASC';
$search = isset($_POST['search']) ? $_POST['search'] : '';

$query = "SELECT l.*, s.studentname FROM lend l JOIN students s ON s.studentID = l.lenderID WHERE l.availability = 'YES'";

if (!empty($search)) {
    $query .= "AND (l.item LIKE '%$search%' OR l.description LIKE '%$search%' OR l.place LIKE '%$search%') ";
}

$query .= "ORDER BY $sort $order";

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
        <form method="POST" class="mainForm">
            <label>
                <input type="text" name="search" placeholder="SEARCH ITEM / DESCRIPTION / PLACE" autocomplete="off" spellcheck="false">
                <i class='bx bx-search'></i>
            </label>
            <div class="sort">
                <input type="submit" <?php echo $sort === 'item' ? 'class="filter"' : '' ?> name="sort" value="item">
                <input type="submit" <?php echo $sort === 'price' ? 'class="filter"' : '' ?> name="sort" value="price">
                <input type="submit" <?php echo $sort === 'date' ? 'class="filter"' : '' ?> name="sort" value="date">
                <input type="submit" <?php echo $order === 'ASC' ? 'class="filter"' : '' ?> name="order" value="ASC">
                <input type="submit" <?php echo $order === 'DESC' ? 'class="filter"' : '' ?> name="order" value="DESC">
            </div>
            <div class="itemlist">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div onclick="document.querySelector('.borrow-form-<?php echo $row['itemID']?>').submit()">
                        <form action="item.php" method="POST" class="borrow-form-<?php echo $row['itemID']; ?>">
                            <input value="<?php echo $row['itemID']; ?>" type="hidden" name="borrowItemID">
                            <input value="<?php echo $row['item']; ?>" type="hidden" name="borrowItem">
                            <input value="<?php echo $row['description']; ?>" type="hidden" name="borrowDescription">
                            <input value="<?php echo $row['place']; ?>" type="hidden" name="borrowPlace">
                            <input value="<?php echo $row['date']; ?>" type="hidden" name="borrowDate">
                            <input value="<?php echo $row['time']; ?>" type="hidden" name="borrowTime">
                            <input value="<?php echo $row['price']; ?>" type="hidden" name="borrowPrice">
                            <input value="<?php echo $row['image']; ?>" type="hidden" name="borrowImage">
                            <input value="<?php echo $row['studentname']; ?>" type="hidden" name="borrowStudent">
                        </form>
                        <img src="<?php echo '../' . $row['image'] ?>">
                        <p><?php echo $row['item'] ?></p>
                        <p><?php echo $row['description'] ?></p>
                        <p>₱ <?php echo $row['price'] . '<span>' . $row['date'] . '</span>'?></p>
                        <p><?php echo $row['place'] ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="borrowBag">
                <i class='bx bxs-shopping-bag'></i>
            </div>
        </form>
    </main>
    <script src="../js/borrow.js"></script>
</body>
</html>
