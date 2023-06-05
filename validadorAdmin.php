<?php
require_once('repository/LoginRepository.php');
require_once('repository/ClienteRepository.php');

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['login'] == fnLogin($email, $senha);
$admin = $_SESSION['login']->privilegio == 'admin';

if (!$admin) {
    setcookie('error', 'Somente Admin do site', $expire, 'instrutech/errorPage.php', 'localhost', isset($_SERVER['HTTPS']), true);
    header("location: errorPage.php");
}