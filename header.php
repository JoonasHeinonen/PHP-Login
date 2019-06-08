<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="An example of a meta description">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>

    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img src="img/simple-logo.png" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div>
                    <form action="includes/login_inc.php" method="POST">
                        <input type="text" name="mailusername" placeholder="Username/E-mail...">
                        <input type="text" name="password" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout_inc.php" method="POST">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </nav>
        </header>