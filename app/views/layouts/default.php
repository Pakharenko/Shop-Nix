<?php $cat = new \fw\providers\CategoryProvider(); ?>
<?php $auth = new \fw\providers\Auth(); ?>
<?php $cart = new \fw\providers\Cart(); ?>
<?php $crumbs = new \fw\providers\Breadcrumbs(); ?>
<?php $crumbs->subscribe(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nix shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public/css/owl.theme.default.min.css">
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
                        <span class="text-success"><?= $auth->auth('name'); ?></span>
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
                    <input class="form-control mr-sm-2" name="text" type="search" placeholder="Поиск"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Поиск</button>
                </form>

                <div class="header-block-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true">
                        <span id="cart-count"><?= $cart::totalProductsCart(); ?></span></i>
                    <a href="/cart"> Корзина </a>
                    <span> <?= $cart::getTotalPriceInHeader(); ?> grn. </span>
                </div>

            </div>
        </div>
    </nav>

</header>

<div class="container">
    <nav aria-label="breadcrumb col">
        <ol class="breadcrumb d-flex justify-content-center">

                <?php foreach ($crumbs::crumbs() as $item) : ?>
                    <?php if (isset($item)) : ?>
                        <li>
                            <?php if (!empty($item['url'])) : ?>
                                <a href="<?php echo $item['url'] ?>"><?php echo $item['text'] ?></a>
                            <?php  else : ?>
                                <?php echo $item['text'] ?>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
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
                        <div class="sidebar-nav">

                            <ul>

                                <?php foreach ($cat->run() as $category) : ?>
                                    <li>

                                        <?php if (count($category['child']) > 0) : ?>
                                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false"
                                               href="/catalog/<?= $category['id']; ?>"><?= $category['name']; ?></a>
                                        <?php else : ?>
                                            <a href="/catalog/<?= $category['id']; ?>"><?= $category['name']; ?> </a>
                                        <?php endif; ?>

                                        <?php if ($category['child']) : ?>

                                            <div class="dropdown-menu">
                                                <? foreach ($category['child'] as $category) : ?>
                                                    <a class="dropdown-item" href="/catalog/<?= $category['id']; ?>">
                                                        - <?= $category['name']; ?></a>
                                                <?php endforeach; ?>
                                            </div>

                                        <?php endif; ?>

                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        </div>

                        <h3>Фильтры</h3>
                        <div class="sort-sidebar-goods">
                            <form action="/catalog/filter" method="post">
                                <p>Сортировать товар:</p>
                                <div class="form-group">
                                    <select name="filter-group" class="form-control form-control-sm">
                                        <option value="price DESC">сначала дорогие</option>
                                        <option value="price ASC">начала недорогие</option>
                                        <option value="name ASC">от A до Z</option>
                                        <option value="name DESC">от Z до A</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-light" name="filter" value="Фильтровать">
                                </div>
                            </form>
                        </div>

                        <h3>Популярное</h3>


                        <div class="slider-sidebar owl-theme">
                            <div class="owl-carousel">
                                <?php foreach ($cat->getPopularProducts() as $product) : ?>
                                    <div class="card">
                                        <img class="card-img-top" src="/public/images/<?= $product['image'] ?>"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name']; ?></h5>
                                            <p class="card-text"><?= $product['tiny_desc']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <h3>О нас</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tempora magni quam ducimus
                            dolor quae minima iusto minus pariatur molestias, eaque quasi, dolorum earum placeat eveniet
                            dolore enim. Magni, hic!</p>


                    </div>


                </div>

                <div class="col-md-9 block-product-items">

                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?= $content; ?>

                </div>
            </div>
        </div>

    </div>
</main>


<section class="bottom-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Shop-NIX</h3>
                <h4>Всё для Вашего комфорта</h4>
            </div>
            <div class="col-md-8">

                <form action="" method="post" class="form-inline">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" name="email" class="form-control" placeholder="Ваш E-mail">
                        </div>
                        <div class="form-group col-sm-4">
                            <button type="submit" name="subscribe" class="btn btn-default">Подписаться</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<footer>
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <h5>Help &amp; Info</h5>
                            <ul>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Returns &amp; Refunds</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Track your Order</a></li>
                                <li><a href="#">Reglaze Service</a></li>
                                <li><a href="#">Lens Price Comparison</a></li>
                                <li><a href="#">A - Z Brands</a></li>
                                <li><a href="#">FAQ's</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Brands we sell</h5>
                            <ul>
                                <li><a href="#">Noosa Amsterdam</a></li>
                                <li><a href="#">Cream Clothing</a></li>
                                <li><a href="#">Taschendieb</a></li>
                                <li><a href="#">Hermes paris</a></li>
                                <li><a href="#">D&amp;G Fashion</a></li>
                            </ul>
                        </div>
                        <div class="clearfix visible-xs-block visible-sm-block"></div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Care &amp; advice</h5>
                            <ul>
                                <li><a href="#">Prescription Information</a></li>
                                <li><a href="#">Lenses &amp; Coatings</a></li>
                                <li><a href="#">PD Measurement</a></li>
                                <li><a href="#">Style Advice</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Shopping Guide</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Store</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Find us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>Follow us</h5>
                    <div class="social-icons">
                        <a href="#"><img src="/public/images/fb.jpg" alt="social"></a>
                        <a href="#"><img src="/public/images/tw.jpg" alt="social"></a>
                        <a href="#"><img src="/public/images/fb.jpg" alt="social"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bottom-footer">
    <div class="container">
        <p>Shop-NIX <?= date('Y'); ?> </p>
        <p>&copy; [ Pro-Web-Master - Pakharenko E. ]</p>
    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/793381aa2c.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<script src="/public/js/main.js"></script>

</body>
</html>