<?php
session_start();
if (!isset($_SESSION['user_Auth']) && !isset($_SESSION['user_data']['usr_mail'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: ../../index.php');
    exit;
}
