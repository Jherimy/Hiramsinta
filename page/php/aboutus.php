<?php
    session_start();
    include "../../includes/connects.php";
    $currentPage = 'ABOUT US';
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
    <title>HOME</title>
    <link rel="stylesheet" href="../css/about.css">
</head>
<body>
    <?php include "bar.php"; ?>
    <section class="about">
        <div class="main">
            <img src="../../assets/image/profile-male.png">
            <div class="about-text">
                <h1>Hiram<span>Sinta</span></h1>
                    <h5>About us</h5>
                <p>This website is a student-to-student equipment lending at PUP-CEA, Sta Mesa.
                Our platform streamlines the borrowing process, emphasizing community collaboration.
                Lenders can choose to change a fee or lend for free. Join us for a convenient 
                and cooperative lending experience!</p>
                <button type="button">Developers</button>
            </div>
        </div>
    </section>
</body>
</html>