<?php
include "app/database/db.php";

// Обработчик урок 25
// $isSubmit = false;
$errMsg = '';
// Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    // tt($_POST);
    // echo "Я пришел с формы регистрации";
    // die();
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
        if (!empty($existence['email']) && $existence['email'] === $email){
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
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . admin/admin.php);
            }else{
                header('location: ' . BASE_URL);
            }
            // tt($_SESSION);
            // exit();
        // $isSubmit = true;
        // tt($post);
    // $last_row = selectOne('users', ['id' => $id]);
    }
    }
}else{
    $login = '';
    $email = '';
}


// Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    // tt($_POST);
    // echo "Форма авторизации";
    // exit();
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);



    if($email === '' || $password === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        // tt($existence);
        // var_dump($existence);
        if($existence && password_verify($password, $existence['password'])){
            // Авторизовать
            // echo 'Авторизовать';
            // Нужно создать функцию loginuser($user), принимающую массив
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . admin/admin.php);
            }else{
                header('location: ' . BASE_URL);
            }
        }else{
            // Ошибка авторизации
            $errMsg = "Email, либо пароль введены неверно!";
        }
    }
}else{
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