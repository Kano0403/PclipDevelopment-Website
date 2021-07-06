<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/styles.css">
        <title>Pclip Development</title>
    </head>

    <body>
    <!--Header area-->
        <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="Logo"></a>
        </header>

        <!--Navigation bar-->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <h1>|</h1>
                <li><a href="projects.php">Projects</a></li>
                <h1>|</h1>
                <li><a href="about.php">About</a></li>
                <h1>|</h1>
                <?php
                    if (isset($_SESSION["userId"])) {
                        echo "<li><a href='index.php'>{UNSET}</a></li>";
                        echo "<h1>|</h1>";
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                    } else {
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>
            </ul>
        </nav>