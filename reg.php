<?php 
include "path.php";
include "app/controllers/users.php";
?>
<?php
// Проверка
// if(isset($_POST['login'])){
//   var_dump($_POST);
//   die();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d68a41201f.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Expletus+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poiret+One&display=swap" rel="stylesheet">
    <title>Регистрация</title>
</head>
<body>
    
<?php include("app/include/header.php"); ?>

<!-- FORM -->
<div class="container reg_form">
<form class="row justify-content-md-center"  method="post" action="reg.php">
    <h2>Форма регистрации</h2>
    <div class="mb-3 col-md-4 col-12 err">
        <p><?=$errMsg?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-4 col-12">
        <label for="formGroupExampleInput" class="form-label">Введите логин</label>
        <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-4 col-12">
      <label for="exampleInputEmail1" class="form-label">Введите email</label>
      <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-4 col-12">
      <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
      <input name="password1" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-md-4 col-12">
        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
        <input name="password2" type="password" class="form-control" id="exampleInputPassword2">
    </div>
    <div class="w-100"></div>
    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <div class="mb-3 col-md-4 col-12">
        <button name="button-reg" type="submit" class="btn btn-secondary">Регистрация</button>
        <a href="log.php">Авторизоваться</a>
    </div>
</form>
</div>
<!-- END FORM -->

<!-- Блок FOOTER START-->
<?php include("app/include/footer.php"); ?>
  <!-- Блок FOOTER END-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>