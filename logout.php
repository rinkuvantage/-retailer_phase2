<?php require_once('header-withoutlogin.php');
unset($_SESSION["User_id"]);
unset($_SESSION["User_type"]);
unset($_SESSION["User_key"]);
unset($_SESSION["User_token"]);
setcookie ("MANTIS_STRING_COOKIE", "", time() - 3600);
setcookie ("MANTIS_secure_session", "", time() - 3600);
@header('Location: index.php');
exit();