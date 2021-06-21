<?php
if(!$_SESSION['usuário']) {
    header('Location: index.php');
    exit();
}