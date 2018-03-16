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
                    <tr id="product-<?= $product['id']; ?>">
                        <th scope="row"><img class="card-img-top" src="/../public/images/<?= $product['image']; ?>"
                           alt="Card image cap"></th>
                           <td><?= $product['name']; ?></td>
                           <td><?= $products_cart[$product['id']]; ?></td>
                           <td><?= $product['price'] * $products_cart[$product['id']]; ?> grn.</td>
                           <td><a class="delete" data-id="<?= $product['id'];?>" href="/cart/delete/<?= $product['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                           </td>
                       </tr>
                   <?php endforeach; ?>

               </tbody>
           </table>

           <div class="count-price-cart">
            <div class="container">
                <p id="total_cart_price">Общая стоимость: <span><?= $total_products_price; ?> grn</span></p>
                <a href="/cart/orders"> Оформление заказа </a>
            </div>
        </div>

    <?php else :?>
        <h3>Корзина пуста</h3>
    <?php endif; ?>

</div>
