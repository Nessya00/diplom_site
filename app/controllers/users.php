<?php
include SITE_ROOT . '/app/database/db.php';

$errMsg = '';

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
//    tt($user);
//    exit();

    if ($_SESSION['admin']){
        header('Location: ' . BASE_URL . 'admin/users/index.php');
    }else{
        header('Location: ' . BASE_URL);
    }
}
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
            userAuth($user);

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
    if ($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
//        exit();
    }else{
        $existence = selectOne('users', ['email' => $email]);
//            tt($existence);
//    exit();
        if ($existence && password_verify($pass, $existence['password'])) {
            userAuth($existence);
        }else{
            $errMsg = "Почта или пароль введены неверно!";
        }
    }
}else{
    $email = '';
}