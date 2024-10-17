<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header('Location: secure.php'); // Redirect to secure section
    exit;
}

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for admin
    $admin_username = 'admin';
    $admin_password = 'project272'; // Make sure to change this to a secure password

    if ($username == $admin_username && $password == $admin_password) {
        // Set session variable
        $_SESSION['logged_in'] = true;
        header('Location: secure.php'); // Redirect to secure section
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SkillGiver</title>
</head>
<body>
    <h2>Admin Login</h2>

    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
