<h2>Сортировка товаров</h2>
<div class="container">
    <div class="row">

        <?php foreach ($product_all as $product) : ?>

            <div class="col-md-4 block-products">
                <div class="card">
                    <img class="card-img-top" src="/public/images/<?= $product['image'];?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="/product/<?= $product['id']; ?>"><?= $product['name']; ?></a></h4>
                        <p class="card-text"><?= $product['tiny_desc']; ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="product-price">
                            Цена: <?= $product['price']; ?> grn.
                        </div>
                        <div class="product-to-cart">
                            <a class="add-to-cart" data-id="<?= $product['id']; ?>" href="/cart/add/<?= $product['id']; ?>">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>


</div>