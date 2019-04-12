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
        # -- destroy_session.php --
        # for lab 1

        # hey php, start the session
        session_start();

        # hey php, unset these session variables
        unset($_SESSION['views']);
        unset($_SESSION['browser']);
        unset($_SESSION['role']);

        # echo out message about deleted session variables
        echo "<p>The session variables have been deleted.</p>";
    ?>
    <!-- links to other pages for this lab -->
    <a href="create_session.php">To CREATE SESSION</a><br>
    <a href="read_session.php">To READ SESSION</a><br>
    <a href="destroy_all_session.php">To DESTROY ALL SESSION</a>
</body>
</html>
