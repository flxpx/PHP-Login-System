

<?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.15/dist/css/uikit.min.css" />
</head>
<body>



    <div class="uk section uk-container">
    
        <?php echo "Hello World! ";
        echo "Today is " . date("Y m d");
        ?>

        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>
    </div>

    <?php require_once "inc/footer.php" ?>

    
    
</body>
</html>