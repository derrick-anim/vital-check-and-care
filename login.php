<?php
session_start(); // Start the session at the very top

// Array of valid username/password pairs
$users = [
    "derrick" => "password",
    "justina" => "12345",
    "michael" => "securepass"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if username exists and password matches
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['admin'] = true; // Set admin to true
        $_SESSION['username'] = $username; // Optional: store username
        header("Location: index.php"); // Redirect to homepage
        exit();
    } else {
        $error = "Wrong credentials";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vital Checks & Care - Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="login-page">
<div class="login-container">
    <img src="CARDIOGRAM_LOGOHEALTH_LOGOCADIOLOGY_LOGO_-_Made_with_PosterMyWall-removebg-preview.png" alt="Hospital Logo" class="login-logo">

    <h2 class="login-title">Welcome Back</h2>

    <form method="post" class="login-form">
        <input type="text" name="username" placeholder="Email or Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <?php if (!empty($error)) : ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <div class="login-links">
        <a href="#">Forgot Password?</a>
        <a href="#">Create Account</a>
    </div>
</div>
</body>
</html>
