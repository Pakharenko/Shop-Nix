<h1>Результаты поиска</h1>

<?php if (!empty($search)) : ?>
<div class="container">
    <div class="row">

        <?php foreach ($search as $product) : ?>

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
<?php else : ?>
    <h3 class="text-danger">Товар "<b class="text-success"><?= $search_text; ?></b>" не найден!</h3>
<?php endif; ?>
