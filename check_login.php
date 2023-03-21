<?php
session_start(); // 기본 24분

if (isset($_SESSION['user_id'])) {
    echo $_SESSION['user_id'];
} else {
    echo 'not_logged_in';
}

?>
