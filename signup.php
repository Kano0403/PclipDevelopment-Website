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
    </section>

<?php
    include_once 'footer.php';
?>