<?php
include SITE_ROOT . '/app/database/db.php';

$errMsg = '';

//регистрация
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if ($login === '' || $email === '' || $passF === '') {
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF-8') < 2) {
        $errMsg = "В названии статьи должно быть более 2 символов!";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли должны совпадать!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (empty($existence)) {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            $_SESSION['id'] = $id;
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if ($_SESSION['admin']){
                header('Location: ' . BASE_URL . 'admin/admin.php');
            }else{
                header('Location: ' . BASE_URL);
            }

        }else{
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }
    }
}else{
    $login = '';
    $email = '';
}

//вход
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    if ($login === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    }
}