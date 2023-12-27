<?php
    session_start();
    include "../../includes/connects.php";
    $currentPage = 'PROFILE';
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
            <p><?php echo explode(' ', $_SESSION['name'])[0] . '<span>.</span>';?></p>
            <p>I'm
                <?php echo $_SESSION['name']; ?>, a
                <?php echo $_SESSION['age']; ?> year old 
                <?php echo ['first-year', 'second-year', 'third-year', 'fourt-year'][$_SESSION['year'] - 1]; ?> college student at the 
                <?php echo $_SESSION['college'] === 'CE' 
                    ? 'College of Engineering'
                    : 'College of Architecture, Design and the Built Environment'; ?>, pursuing a 
                <?php echo $_SESSION['course'];?></p>
            <p><i class='bx bxs-user'></i><?php echo $_SESSION['username']; ?></p>
            <p><i class='bx bxs-id-card'></i><?php echo $_SESSION['studentID']; ?></p>
            <p><i class='bx bxs-envelope'></i><?php echo $_SESSION['webmail']; ?></p>
        </div>
        <div class="profile">
            <img src="<?php echo $_SESSION['sex'] === 'Male' ? '../../assets/image/profile-male.png' : '../../assets/image/profile-female.png'?>">

             <!-- DELETE LATER -->
            <p>SAMPLE USER IMAGE</p>
        </div>
    </main>
</body>
</html>