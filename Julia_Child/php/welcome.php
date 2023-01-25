<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="welcome-page">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <p>You are now logged in!</p>
    </div>

    <footer>
        <p>Copyright ©2022 by Julia Child</p>
    </footer>
</body>

</html>