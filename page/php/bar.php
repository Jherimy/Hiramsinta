<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bar.css">
</head>
<body>
    <header>
        <p>
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter' ></i>
            <i class='bx bxl-instagram-alt' ></i>
            <i class='bx bxl-linkedin' ></i>
        </p>
        <i class='bx bxs-phone' ></i>
        <p>+63 926 0521 208</p>
        <i class='bx bxs-envelope' ></i>
        <p>@hiramsinta@gmail.com</p>
    </header>
    <nav>
        <h1>Hiram<span>sinta.</span></h1>
        <div>
            <p onclick="page(this)" <?php echo $currentPage === 'HOME' ? 'class="active"' : ''; ?>>HOME</p>
            <p onclick="page(this)" <?php echo $currentPage === 'BORROW' ? 'class="active"' : ''; ?>>BORROW</p>
            <p onclick="page(this)" <?php echo $currentPage === 'LEND' ? 'class="active"' : ''; ?>>LEND</p>
            <p onclick="page(this)" <?php echo $currentPage === 'ABOUT US' ? 'class="active"' : ''; ?>>ABOUT US</p>
            <p onclick="page(this)" <?php echo $currentPage === 'PROFILE' ? 'class="active"' : ''; ?>>PROFILE</p>
            <p onclick="signout()">LOG OUT</p>
        </div>
    </nav>
    <script src="../js/bar.js"></script>
</body>
</html>