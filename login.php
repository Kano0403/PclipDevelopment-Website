<?php
include_once 'header.php';
?>

    <!--Main content-->
    <section>
        <h2>Signup</h2>
        <div class="sighup-page-form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="-Username-">
                <input type="password" name="passwd" placeholder="-Password-">
                <button type="submit" name="submit">Continue</button>
            </form>
        </div>
    </section>

<?php
include_once 'footer.php';
?>
