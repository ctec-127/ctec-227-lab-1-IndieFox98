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
        # -- read_session.php --
        # for lab 1

        # hey php, start the session
        session_start();

        # print introductory message
        echo "<h2>Reading Session...</h2>";

        # hey php, read these session variables if they are set
        if (isset($_SESSION['views'])) {
            echo "<p>Views: " . $_SESSION['views'] . "</p>";    # echo view counter
        } else {
            echo "<p>The views session variable is not set.</p>";
        }

        if (isset($_SESSION['browser'])) {
            echo "<p>Browser: " . $_SESSION['browser'] . "</p>";    # echo browser name
        } else {
            echo "<p>The browser session variable is not set.</p>";
        }

        if (isset($_SESSION['role'])) {
            echo "<p>Role: " . $_SESSION['role'] . "</p>";   # echo role of user
        } else {
            echo "<p>The role session variable is not set.</p>";
        }
    ?>
    <!-- links to other pages for this lab -->
    <a href="create_session.php">To CREATE SESSION</a><br>
    <a href="destroy_session.php">To DESTROY SESSION</a><br>
    <a href="destroy_all_session.php">To DESTROY ALL SESSION</a>
</body>
</html>