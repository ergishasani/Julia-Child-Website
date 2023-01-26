<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
    <link rel="icon" href="img/login_icon.png">
    <title>Welcome <?php echo $_SESSION['username']; ?></title>
</head>

<header>
    <h1><a href="../index.html" class="header_link"> Julia Child</a></h1>
    <a href="#" onclick="dropdownFunction()" class="username">
        <?php echo ucfirst($_SESSION['username']); ?>
    </a>

</header>


<body>
    <section class="hero">


        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <p>You are now logged in!</p>
        <a href="logout.php" onclick="logout()" class="logout">Logout</a>

    </section>
</body>

<footer>
    <p>Copyright &copy; 2022 by Julia Child. All rights reserved.</p>
    <div>
        <p>Worked By:
            <a onclick='window.open("https://www.instagram.com/nialikaj/");return false'>Nia Liakj</a>,
            <a onclick='window.open("https://instgram.com/ergis_hasani");return false'>Ergis Hasani</a>
        </p>

    </div>
</footer>

</html>