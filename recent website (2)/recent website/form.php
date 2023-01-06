<?php
require_once _DIR_ . '/database.php';
$db = new Database();

if(!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['terms'])) {
    // register
    $terms = $_POST['terms'] === 'on';
    if ($terms) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $is_provider = trim($_POST['type']) === 'provider';

        if ($password === $confirm) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $insert = $db->insert('users', array('name' => $name, 'email' => $email, 'password' => $password, 'is_provider' => $is_provider));

            if ($insert) {
                $_SESSION['user'] = $db->selectAll('users', array('email' => $email))[0];
            }
        }
    }
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $verify = $db->selectWhere(array('password'), 'users', array('email' => $email));
    if(!empty($verify)) {
        $password_hash = $verify[0]['password'];

        if(password_verify($password, $password_hash)) {
            $_SESSION['user'] = $db->selectAll('users', array('email' => $email))[0];
        }
    }
}

header('Location: ../indext.html');