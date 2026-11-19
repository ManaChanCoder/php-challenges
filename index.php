<?php

$user = [
    'email' => 'manachan@example.com',
    'password' => 'password123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email'] ?? '');
    $pass = $_POST['password'] ?? '';

    if (empty($email)) echo '<script>alert("Email cannot be empty.");</script>';
    if (strlen($pass) <= 6) echo '<script>alert("Password must be at least 7 characters long.");</script>';

    if ($email === $user['email'] && $pass === $user['password']) {
        // check if empty email

        echo '<script>alert("Welcome, ' . $email . '!");</script>';
    } else {
        echo '<script>alert("Invalid email or password.");</script>';
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>

</html>