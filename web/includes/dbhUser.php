<?php
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("SELECT uidUsers FROM users WHERE uidUsers = $user_check", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['uidUsers'];

if(!isset($login_session)){
    mysql_close($conn);
    header('Location: index.php');
}