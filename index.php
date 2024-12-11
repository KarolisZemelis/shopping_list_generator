<?php 
session_start();
if(isset($_SESSION['logged_in']) && $SESSION['logged_in' === true]){
    header('Location: dashboard.php');
    exit;
}
$error_message = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shopping List Generator</title>
</head>

<body>
    <?php if ($error_message): ?>
    <p style='color: red'><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif;?>
    <form action="php/login.php" method='POST'>
        <label for="username">Username:</label>
        <input type="text" name='username' id='username' required>

        <label for="password">Password:</label>
        <input type="text" name='password' id='password' required>
        <button>Submit</button>
    </form>
</body>

</html>