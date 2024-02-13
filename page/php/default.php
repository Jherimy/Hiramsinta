<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/default.css">
    <title>HIRAM SINTA</title>
</head>
<body>
    <section>
        <p>P'WEDE BA<br>PA<span>HIRAMSINTA?</span></p>
        <p>HiramSinta is a student-to-student equipment lending at PUP-CEA, Sta. Mesa. Our platform streamlines the borrowing process, 
            emphasizing community collaboration. Lenders can choose to charge a fee or lend for free. Join us for a convenient and cooperative 
            lending experience!<br>New here? <span onclick="register()">Click here to register.</span><br> 
            <span>
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxl-instagram-alt' ></i>
                <i class='bx bxl-twitter' ></i>
                <i class='bx bxl-tiktok' ></i>
            </span>
        </p>
    </section>
    <main>
        <form action="../../includes/default-login.php" method="POST">
            <p>WELCOME BACK!</p>
            <div>
                <i class='bx bx-user' ></i>
                <input name="username" type="text" placeholder="Enter username or webmail" autocomplete="off" spellcheck="false" required>
            </div>
            <div>
                <i class='bx bx-lock-alt' ></i>
                <input name="password" type="password" placeholder="Enter password" autocomplete="off" spellcheck="false" required>
                <i class='bx bx-hide' onclick="passwordVisibility()"></i>
            </div>
            <input type="submit" value="LOG IN">
        </form>
    </main>
    <script src="../js/default.js"></script>
</body>
</html>