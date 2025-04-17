<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Home | Ludiflex</title>
</head>

<body>
    <div class="wrapper style=height: 400px">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Home</div>
            </div>
        </div>
        <div class="welcome">
            <h2>Welcome to OurPage</h2>
        </div>
        <div class="input-box">
            <?php echo $_SESSION['name']; ?>
            <i class='bx bx-user icon'></i>
        </div>
        <div class="input-box">
            <?php echo $_SESSION['email']; ?>
            <i class='bx bx-envelope icon'></i>
        </div>
        <div class="input-box">
            <button class="btn-submit" id="logout-btn">Logout <i class='bx bx-log-out'></i></button>
        </div>
    </div>


    <script>
        const logoutBtn = document.querySelector("#logout-btn");

        logoutBtn.addEventListener("click", () => {
            location.href = "php/logout.php";
        })
    </script>
</body>

</html>