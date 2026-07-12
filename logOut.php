

<?php

session_start();

if (isset($_SESSION['userName'])){
    unset($_SESSION['userName']);
    unset($_SESSION['id']);


}
echo '<script>window.location.href = "index.php";</script>';




?>