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
        # -- destroy_all_session.php --
        # for lab 1

        # hey php, start the session
        session_start();

        # hey php, destroy the session
        session_destroy();  # ugh srsly -php

        # echo out message about destroyed session
        echo "<h2>ENTIRE SESSION DESTROYED!!!</h2>";
        echo "<p>Courtesy of H.R.C.</p>";   # Hillary Rodh--forget it
    ?>
    <!-- links to other pages for this lab -->
    <a href="create_session.php">To CREATE SESSION</a><br>
    <a href="read_session.php">To READ SESSION</a><br>
    <a href="destroy_session.php">To DESTROY SESSION</a>
</body>
</html>
