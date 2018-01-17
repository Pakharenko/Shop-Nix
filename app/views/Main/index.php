<?php include '../prod_list.php'; ?>

<h2>Новинки</h2
<div class="container">
    <div class="row">

        <?php foreach ($products as $product) : ?>

            <div class="col-md-4 block-products">
                <div class="card">
                    <img class="card-img-top" src="public/images/ap.jpeg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/product"><?= $product['title']; ?></a></h4>
                        <p class="card-text"><?= $product['desc']; ?></p>
                        <p class="card-text count-stock">Кол-во на складе: <?= $product['count_goods']; ?> шт.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/cart" class="btn btn-success">В корзину</a>
                                                <span class="product-price">Цена: <?= $product['price']; ?> <i
                                                        class="fa fa-money" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>


    <h2>Хиты продаж</h2
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) : ?>

                <div class="col-md-4 block-products">
                    <div class="card">
                        <img class="card-img-top" src="public/images/apple.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="/product"><?= $product['title']; ?></a></h4>
                            <p class="card-text"><?= $product['desc']; ?></p>
                            <p class="card-text count-stock">Кол-во на складе: <?= $product['count_goods']; ?> шт.</p>
                        </div>
                        <div class="card-footer">
                            <a href="/cart" class="btn btn-success">В корзину</a>
                                                <span class="product-price">Цена <?= $product['price']; ?> <i
                                                        class="fa fa-money" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

</div>