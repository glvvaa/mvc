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

    <div class="jumbotron mt-4">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Этот сайт предназначен для таких же джунов, как и я - владелец этого сайта.</p>
        <hr class="my-4">
        <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Авторизация </a>
        </p>
    </div>
    <a class="btn btn-primary btn-lg" href="/register" role="button">Регистрация </a>
    </body>
    </html>
<?php
