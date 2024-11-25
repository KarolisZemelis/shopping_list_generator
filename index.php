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

</body>

</html>