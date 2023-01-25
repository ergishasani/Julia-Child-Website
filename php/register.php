<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="icon" href="img/login_icon.png">
</head>
<!--Header Section-->
<header>
    <a class="link" href="../index.html">Back</a>
    <h1><a href="../index.html" class="header_link"> Julia Child</a></h1>
</header>

<!--Body-->

<body>

    <?php
session_start();
require 'connect.php';

if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $user_type = mysqli_real_escape_string($db, $_POST['user_type']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);

    // Check if the username already exists
    $query = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 0) {
        $query = "INSERT INTO users (username, password, user_type, email, phone, address) VALUES('$username', '$password', '$user_type','$email','$phone','$address')";
        mysqli_query($db, $query);
        echo "<script>alert('Registration successful');</script>";
        header('Location: index.php');
    } else {
        echo "<script>alert('Username already taken');</script>";
    }
}
?>

    <section class="hero">

        <form action="register.php" method="post" class="register_form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <label for="user_type">User Type:</label>
            <select id="user_type" name="user_type">
                <option value="normal">Normal</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" value="Register" name="register" class="registration_btn">
            <p>Already have an Account? <br><a href="index.php">Log-in!</a></p>
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