<?php
include_once 'header.php';
?>

    <!--Main content-->
    <section>
        <h2>Signup</h2>
        <div class="sighup-page-form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="-Username-">
                <input type="password" name="password" placeholder="-Password-">
                <button type="submit" name="submit">Continue</button>
            </form>
        </div>

        <?php
            if (isset($_GET["error"])) {
                $error = $_GET["error"];
                if ($error == "emptyInput") {
                    echo "<p>Please fill app fields.</p>";
                } elseif ($error == "invalidLogin") {
                    echo "<p>Username and/or Password incorrect.</p>";
                } else {
                    echo "<p>Please contact a web developer with this error: " . $error . "</p>";
                }
            }
        ?>
    </section>

<?php
include_once 'footer.php';
?>
