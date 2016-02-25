<?php require_once('header-withoutlogin.php');
unset($_SESSION["User_id"]);
unset($_SESSION["User_type"]);
unset($_SESSION["User_key"]);
unset($_SESSION["User_token"]);
@header('Location: index.php');
exit();