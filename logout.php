<?php
    session_start();

    session_destroy();
    $_SESSION['accountKey'] = "";
    header("Location: welcome.php");
?>