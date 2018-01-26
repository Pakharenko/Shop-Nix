<?php $cat = new \fw\providers\CategoryProvider(); ?>
<?php $auth = new \fw\providers\Auth(); ?>
<?php $cart = new \fw\providers\Cart(); ?>
<?php $crumbs = new \fw\providers\Breadcrumbs(); ?>

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

                    <?php if ($auth->auth()) : ?>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="/cabinet">Личный кабинет </a>,
                        <span class="text-success"><?= $auth->auth(); ?></span>
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
                        <a class="nav-link" href="/post">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Контакты</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-10" method="post" action="/search">
                    <input class="form-control mr-sm-2" name="text" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Поиск</button>
                </form>

                <div class="header-block-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"><span
                                id="cart-count"><?= $cart::totalProductsCart(); ?></span></i>
                    <a href="/cart"> Корзина </a>
                    <span> <?= $cart::getTotalPriceInHeader(); ?> grn </span>
                </div>

            </div>
        </div>
    </nav>

</header>

<div class="container">
    <nav aria-label="breadcrumb col">
        <ol class="breadcrumb d-flex justify-content-center">

            <?php foreach ($crumbs::crumbs() as $crumb) : ?>
            <?php if ($crumb == '') :?>
                <li>Главная страница</li>
            <?php endif;?>
                <li class="breadcrumb-item"><a href="/<?= $crumb; ?>"><?= $crumb; ?></a></li>
            <?php endforeach; ?>
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
                        <a class="text-danger" href="/catalog">Все товары...</a>
                        <ul class="sidebar-nav">

                            <?php foreach ($cat->run() as $category) : ?>
                                <?php if (isset($this->route['alias'])) : ?>
                                    <li <?php if ($this->route['alias'] == $category['id']) echo "class = category-active"; ?> >
                                        <a href="/catalog/<?= $category['id']; ?>"><?= $category['name']; ?></a></li>
                                <?php else : ?>
                                    <li><a href="/catalog/<?= $category['id']; ?>"><?= $category['name']; ?></a></li>
                                <?php endif; ?>

                            <?php endforeach; ?>

                            <!--                            <li>-->
                            <!--                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"-->
                            <!--                                   aria-expanded="false">-->
                            <!--                                    Xiaomi-->
                            <!--                                </a>-->
                            <!--                                <div class="dropdown-menu">-->
                            <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                            <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                            <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                            <!--                                    <a class="dropdown-item" href="#">Separated link</a>-->
                            <!--                                </div>-->
                            <!--                            </li>-->
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
        <p>&copy; [ Pro-Web-Master - Pakharenko E. ]</p>
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

<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>