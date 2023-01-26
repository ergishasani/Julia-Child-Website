<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="/img/login_icon.png">
    <link rel="stylesheet" type="text/css" href="css/list_users.css">
</head>
<header>
    <h1><a href="../index.html" class="header_link"> Julia Child Users</a></h1>


</header>


<body>
    <section class="hero">

        <?php
require 'connect.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in and is an admin
if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
    echo "You are not authorized to view this page.";
} else {
 
    
    // Select all the data from the users table
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);
    echo '<table border="1" style="border-collapse: collapse; padding: 15px 6px;">';
    echo '<tr>
            <th>ID</th>
            <th>Username</th>
            <th>User Type</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
          </tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['username'] . '</td>
            <td>' . $row['user_type'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['phone'] . '</td>
            <td>' . $row['address'] . '</td>
          </tr>';
        }
        echo '</table>';
    }
    ?>
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