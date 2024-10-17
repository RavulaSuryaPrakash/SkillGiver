<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect to login if not authenticated
    exit;
}

// Array of users
$users = [
    'Mary Smith',
    'John Wang',
    'Alex Bington',
    'Sophia Carter',
    'Liam Thompson'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Section - SkillLinker</title>
</head>
<body>
    <h2>Current Users</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="logout.php">Logout</a>
</body>
</html>