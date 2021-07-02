<?php
    include_once 'header.php';
?>

    <!--Main content-->
    <section>
        <h2>Signup</h2>
        <div class="sighup-page-form">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="username" placeholder="-Username-">
                <input type="text" name="email" placeholder="-Email-">
                <input type="password" name="password" placeholder="-Password-">
                <input type="password" name="passwordConf" placeholder="-Confirm Password-">
                <button type="submit" name="submit">Continue</button>
            </form>
        </div>

        <?php
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
            if ($error == "emptyInput") {
                echo "<p>Please fill app fields.</p>";
            } elseif ($error == "invalidUsername") {
                echo "<p>Please only use characters in the US-English alphabet and numbers 0-9.</p>";
            } elseif ($error == "invalidEmail") {
                echo "<p>Please use a valid email. If you are having an issue with your email, please contact Kano0403#7825 on Discord.</p>";
            } elseif ($error == "failedPasswordConfirmation") {
                echo "<p>Please make sure you entered the same password in both boxes.</p>";
            } elseif ($error == "usernameNotAvailable") {
                echo "<p>Sorry, this username is taken.</p>";
            } elseif ($error == "internalStmtFailure") {
                echo "<p>Internal error. Try again.</p>";
            } else {
                echo "<p>Please contact a web developer with this error: " . $error . "</p>";
            }
        }
        ?>

    </section>

<?php
    include_once 'footer.php';
?>