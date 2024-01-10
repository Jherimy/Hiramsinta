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
                <p>Welcome to <span>HiramSinta</span>, where lending meets community collaboration! 
                    Our website is the go-to hub for student-to-student equipment lending
                     at PUP-CEA, Sta. Mesa. We've revolutionized the borrowing process,
                    making it seamless and emphasizing the power of community cooperation.</p>
                <p> Here, lenders have the flexibility to choose whether to charge a fee or
                     lend equipment for free. It's not just about borrowing; it's about 
                     creating a supportive network within our student community. 
                     <span>Join us on HiramSinta</span> for a lending experience that's not only convenient 
                     but also fosters a spirit of collaboration. Together, let's make borrowing and lending a breeze!</p>
                <a href="members.html"><button type="button">Developers</button></a>
            </div>
        </div>
    </section>
</body>
</html>