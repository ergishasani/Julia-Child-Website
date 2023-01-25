<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="img/login_icon.png">
</head>
<!--Header Section-->

<header>
    <a class="link" href="../index.html">Back</a>
    <h1><a href="../index.html" class="header_link"> Julia Child</a></h1>
</header>

<!--Body-->

<body>
    <section class="hero">
        <form action="login.php" method="post" class="login_form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button class="login_btn" type="submit" name="login">Login</button>
            <p>Don't have an Account? <br><a href="register.php">Register now!</a></p>
        </form>
    </section>
</body>

<!--Footer Section-->

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