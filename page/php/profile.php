<?php
    session_start();
    include "../../includes/connects.php";
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
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <?php include "bar.php"; ?>
    <main>
        <div class="details">
            <p><?php echo explode(' ', $_SESSION['name'])[0] . '<br>' . implode(' ', array_slice(explode(' ', $_SESSION['name']), 1)); ?></p>
        </div>
        <div class="profile"><img src="../../assets/image/sample-profile.png"></div>
    </main>
</body>
</html>