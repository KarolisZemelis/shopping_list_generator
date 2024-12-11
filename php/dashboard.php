<?php 
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    header('Location: ../index.php?error=Please%20log%20in%20first');
    exit();
}

$username = $_SESSION['user'] ?? 'Guest';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../js/app.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>This is your dashboard.</p>
    </header>
    <main>
        <?php if (isset($_SESSION['error_message'])): ?>
        <p style="color: red;"><?php echo htmlspecialchars($_SESSION['error_message']); ?></p>
        <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success_message'])): ?>
        <p style="color: green;"><?php echo htmlspecialchars($_SESSION['success_message']); ?></p>
        <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>
        <!-- here we show that the data from this form will be sent to a
        file php/add_recipe.php it will be sent using POST method () (used to send data which creates a resource in
        the server) -->
        <!-- removed while setting up JS action="./submit_recipe.php" -->
        <form id="recipe-form" method="POST">
            <label for="recipe-name">Recipe Name:</label>
            <input type="text" id="recipe-name" name="recipe_name" placeholder="Recipe Name" required>
            <label for="calories">Recipe Calories:</label>
            <input type="number" id="calories" name="calories" placeholder="Recipe Calories" required>
            <div id="ingredients-container">
                <!-- Dynamic ingredient rows will be added here -->
            </div>

            <button type="button" id="add-ingredient">Add Ingredient</button>
            <button type="submit" id='submitRecipe'>Submit Recipe</button>
        </form>
        <?php 

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

?>
    </main>

    <!-- Logout Link -->
    <a href="logout.php">Log Out</a>
</body>

</html>