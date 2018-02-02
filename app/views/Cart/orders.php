<?php $cart = new \fw\providers\Cart(); ?>

<h2>Оформление Заказа</h2>

<div class="block-orders">
    <p class="text-primary">Вы выбрали <?= $cart::totalProductsCart(); ?>
        тов., на сумму <?= $total_products_price; ?> grn.
    </p>
<h5 class="text-dark">Заполните Ваши данные для оформления заказа</h5>

    <?php if (isset($errors) && is_array($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
            <p class="text-danger"> - <?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="exampleInputName">Ваше имя:</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" value="<?= $name_user;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputTel">Номер телефона</label>
                <input type="text" name="phone" class="form-control" id="exampleInputTel"
                       value="">
            </div>
            <div class="form-group">
                <label for="exampleComment">Комментарий к заказу</label>
                <textarea class="form-control" name="comment" id="exampleComment" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Заказать</button>
        </form>
    </div>
