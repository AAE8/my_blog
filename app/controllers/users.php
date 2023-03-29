<?php
include "app/database/db.php";

// Обработчик урок 25
// $isSubmit = false;
$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);

    if($login === '' || $email === '' || $password2 === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($login, 'UTF8') < 2) {
        $errMsg = "Логин должен быть более 2-x символов";
    }elseif($password1 !== $password2) {
        $errMsg = "Пароли в обоих полях должны совпадать";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Пользователь с таким email уже зарегистрирован!";
        }else{
            $password = password_hash($password1, PASSWORD_DEFAULT);
            $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $password
        ];
        $id = insert('users', $post);
        // $isSubmit = true;
        tt($post);
    // $last_row = selectOne('users', ['id' => $id]);
}else{
    echo 'GET';
    $login = '';
    $email = '';
}

// if(isset($_POST['login'])){
    // var_dump($_POST);
    // die();
    // tt($_POST);
    // exit();
    // $login = trim($_POST['login']);
    // $email = trim($_POST['email']);
    // $password1 = $_POST['password1'];
    // $password2 = trim($_POST['password2']);
    // $admin = 0;
    // $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);
    // $admin = 0;

    // echo $login . $email . $password2 . $admin;

    // $post = [
    //     'admin' => $admin,
    //     'username' => $login,
    //     'email' => $email,
    //     'password' => $password2
    // ];

    // $id = insert('users', $post);
    // $last_row = selectOne('users', ['id' => $id]);
    // // echo $id;
    // // tt($post);
    // tt($last_row);
// }