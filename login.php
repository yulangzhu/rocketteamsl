<?php

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    header('Location: https://htmlpreview.github.io/?https://raw.githubusercontent.com/yulangzhu/rocketteamsl/main/index.html');
}
?>