<?php
if (!isset($_SESSION['userUid'])){
    header("Location: index.php?error=notLoggedIn");
} else {

};