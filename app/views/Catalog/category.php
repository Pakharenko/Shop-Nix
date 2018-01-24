<div class="container">
    <div class="row">

        <?php if (!empty($product_category)) : ?>
        <?php foreach ($product_category as $product) : ?>
            <div class="col-md-4 block-products">
                <div class="card">
                    <img class="card-img-top" src="/public/images/<?= $product['image'];?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/product/<?= $product['id'];?>"><?= $product['name'];?></a></h4>
                        <p class="card-text"><?= $product['tiny_desc']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="/cart" class="btn btn-success">В корзину</a>
                        <span class="product-price">Цена: <?= $product['price']; ?> <i
                                class="fa fa-money" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else : ?>
        <h3 class="text-danger">Товары данной категории отсутствуют!</h3>
        <?php endif ; ?>

    </div>
</div>