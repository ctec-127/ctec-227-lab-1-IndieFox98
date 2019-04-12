<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        # -- create_session.php --
        # for lab 1

        # hey php, start the session
        session_start();

        # hey php, set these session variables if they are not set
        if (!isset($_SESSION['views'])) {
            $_SESSION['views'] = 0;    # set view counter
        }

        if (!isset($_SESSION['browser'])) {
            $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];    # store browser name
        }

        if (!isset($_SESSION['role'])) {
            $_SESSION['role'] = 'admin';   # set role of user
        }

        # increment view counter for every load/reload/METALLICASUCKEDTHEN/whatever
        $_SESSION['views']++;

        # echo out session variables on the browser
        echo "<h2>SESSION CREATED!!!</h2>";
        echo "<p>Views: " . $_SESSION['views'] . "</p>";
        echo "<p>Browser: " . $_SESSION['browser'] . "</p>";
        echo "<p>Role: " . $_SESSION['role'] . "</p>";
    ?>
    <!-- links to other pages for this lab -->
    <a href="read_session.php">To READ SESSION</a><br>
    <a href="destroy_session.php">To DESTROY SESSION</a><br>
    <a href="destroy_all_session.php">To DESTROY ALL SESSION</a>
</body>
</html>
