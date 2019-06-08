<?php
    include_once 'header.php';
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup<h1>
                <form action="includes/signup_inc.php" method="POST">
                    <input type="text" name="username" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>
<?php
    include_once 'footer.php';
?>