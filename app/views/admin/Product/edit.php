<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Редактировать</h3>
            </div>



            <form method="post" action=""  class="col-md-6" enctype="multipart/form-data">
                <?php foreach ($products as $product) : ?>
                <div class="form-group">
                    <label>Название продукта</label>
                    <input type="text" name="name" class="form-control" value="<?= $product['name']; ?>">
                </div>

                <div class="form-group">
                    <label>Название бренда</label>
                    <input type="text" name="brand" class="form-control" value="<?= $product['brand']; ?>">
                </div>

                <div class="form-group">
                    <label>Цена</label>
                    <input type="text" name="price" class="form-control" value="<?= $product['price']; ?>">
                </div>

                <div class="form-group">
                    <label>Категория продукта</label>
                    <select name="category_id">

                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['id']; ?>"
                                    <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                    <?php echo $category['name']; ?>
                                </option>
                            <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Короткое описание</label>
                    <input name="tiny_desc" class="form-control" rows="3" value="<?= $product['tiny_desc']; ?>">
                </div>

                <div class="form-group">
                    <label>Полное описание</label>
                    <input name="description" class="form-control" rows="3" value="<?= $product['description']; ?>">
                </div>

                <div class="form-group">
                    <label>Изображение продукта</label><br>
                    <img src="/public/images/<?= $product['image']; ?>" width="100" height="100" alt="<?= $product['name']; ?>" />
                    <input  type="file" name="image" class="form-control-file" value="<?= $product['image']; ?>">
                </div>

                <div class="form-group">
                    <label>Новинка</label>
                    <select name="is_new" class="form-control">
                        <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Хит</label>
                    <select name="is_hits" class="form-control">
                        <option value="1" <?php if ($product['is_hits'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['is_hits'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Популярное</label>
                    <select name="is_popular" class="form-control">
                        <option value="1" <?php if ($product['is_popular'] == 1) echo ' selected="selected"'; ?>>Да</option>
                        <option value="0" <?php if ($product['is_popular'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                    </select>
                </div>

                <?php endforeach; ?>
                <button type="submit" name="submit" class="btn btn-primary">Редактировать</button>

            </form>

        </div>
    </div>


</section>