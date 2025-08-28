<?php
session_start();

    if(isset($_SESSION['user_role_id']))
{
     unset($_SESSION['user_role_id']);
}

session_destroy();

header("Location: prijava.php");
die;

