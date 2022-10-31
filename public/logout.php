<?php
session_start();
session_destroy();
setcookie("cookies", md5("aa" . $users . "bb"), time() - 1);

header("location:index.php");

?>