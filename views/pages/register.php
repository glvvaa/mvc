<?php
use App\Servise\Page;
?>

<!doctype html>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php
Page::part('navbar');
?>

<div class="container">
    <form class="mt-4"  action="/auth/register" method="post" enctype="multipart/form-data">
        <h2 class ="mt-4"> Попробуй себя в нашем клубе </h2>
        <div class="mb-3">
            <label for="Почта" class="form-label">Почта</label>
            <input type="email" name ="email" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="mb-3">
            <label for="Логин" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="ФИО" class="form-label">ФИО</label>
            <input type="text" name ="full_name" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="Фоточка" class="form-label">Твоя фоточка</label>
            <input type="file" name ="avatar" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="Пароль" class="form-label">Пароль</label>
            <input type="password" name = "password"class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="Подтвердите пароль" class="form-label">Подтвердите пароль</label>
            <input type="password" name ="password_confirm" "class="form-control" id="exampleInputPassword1">

        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
