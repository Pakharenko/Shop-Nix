<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nix shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>

<header>

    <div class="top-header bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">The best shopper</div>
                <div class="col-md-4"><i class="fa fa-phone" aria-hidden="true"></i>
                    +38(093) 082-95-05
                </div>
                <div class="col-md-4">
                    <?php if (\app\models\User::isAuth()) : ?>
<<<<<<< HEAD
<<<<<<< HEAD
                        <?= app\models\User::isAuth(); ?>
=======
                        <?= \app\models\User::isAuth(); ?>
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
=======
                        <?= \app\models\User::isAuth(); ?>
>>>>>>> 69e86e9c9d4ecb17cbffcaae81c7e22be0bab678
                        <a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a>
                    <?php else : ?>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <a href="/user/login">Логин</a>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="/user/register">Регистрация</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">Shop-NIX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-10">
                    <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>

                <div class="header-block-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <a href="/cart"> Корзина </a>
                    <span> 0.00 grn </span>
                </div>

            </div>
        </div>
    </nav>

</header>

<div class="container">
    <nav aria-label="breadcrumb col">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
</div>


<main>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <div class="sidebar">
                        <h3>Категории</h3>
                        <ul class="sidebar-nav">
                            <li><a href="">Lenovo</a></li>
                            <li><a href="">Nokia</a></li>
                            <li><a href="">Samsung</a></li>
                            <li>

                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Xiaomi
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>


                            </li>
                            <li><a href="">Nomi</a></li>
                        </ul>

                        <h3>Фильтры</h3>
                    </div>

                </div>
                <div class="col-md-9 block-product-items">

                    <?= $content; ?>
                </div>
            </div>
        </div>

    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>Shop-NIX <?= date('Y'); ?> </p>
        <p>[ Pro-Web-Master - Pakharenko E. ]</p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/793381aa2c.js"></script>
</body>
</html>