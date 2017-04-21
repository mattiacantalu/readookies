<?php
    echo "<li>status is: " . $_COOKIE['status'];

    // Here comes the magic which set the servers SET-COOKIE header (apparently) so it works on consecutive page loads
    setcookie('status', $_COOKIE['status'], time() + (86400 * 30), '/');

    echo '<li><a href="">Blank reload</a>';
    echo '<li><a href="#" onclick="location.reload(true);">Javascript reload</a>';

    exit;
?>
