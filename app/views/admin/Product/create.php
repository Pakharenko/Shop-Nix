<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Добавить продукт</h3>
            </div>

            <form method="post" action="/admin/product/create" class="col-md-6" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Название продукта</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Название бренда</label>
                    <input type="text" name="brand" class="form-control">
                </div>

                <div class="form-group">
                    <label>Цена</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label>Категория продукта</label>
                    <select class="form-control" name="category_id">
                        <?php foreach ($categories as $category) :?>
                        <option value="<?php echo $category['id']; ?>">
                            <?= $category['name']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Короткое описание</label>
                    <textarea name="tiny_desc" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Полное описание</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Изображение продукта</label>
                    <input name="image" type="file" class="form-control-file">
                </div>

                <div class="form-group">
                    <label>Новинка</label>
                    <select name="is_new" class="form-control">
                        <option value="1" selected="selected">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Хит</label>
                    <select name="is_hits" class="form-control">
                        <option value="1" selected="selected">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Популярное</label>
                    <select name="is_popular" class="form-control">
                        <option value="1" selected="selected">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Добавить</button>

            </form>


        </div>
    </div>


</section>