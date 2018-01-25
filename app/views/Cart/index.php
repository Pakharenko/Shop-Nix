<div class="cart">


<?php if ($products_cart) : ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Товар</th>
            <th scope="col">Кол-во</th>
            <th scope="col">Цена</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach ($products as $product) :?>
            <tr>
            <th scope="row"><img class="card-img-top" src="/../public/images/<?= $product['image']; ?>"
                                 alt="Card image cap"></th>
            <td><?= $product['name']; ?></td>
            <td><?= $products_cart[$product['id']]; ?></td>
            <td><?= $product['price'] * $products_cart[$product['id']]; ?></td>
            <td><a class="delete" href="/cart/delete/<?= $product['id'];?>""><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <div class="count-price-cart">
        <div class="container">
            <p>Общая стоимость: <span><?= $total_products_price; ?> grn</span></p>
            <a href=""> Оформление заказа </a>
        </div>
    </div>

    <?php else :?>
    <h3>Корзина пуста</h3>
    <?php endif; ?>

</div>
