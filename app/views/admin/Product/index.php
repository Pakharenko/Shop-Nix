<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Управление товарами</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <a href="/admin/product/create" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Изображение</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Имя продукта</th>
                    <th>Бренд</th>
                    <th>Кор. описание</th>
                    <th>Пол. описание</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($all_products as $product) :?>
                <tr>
                    <td><?= $product['id']; ?></td>
                    <td class="table-admin-image"><img src="/public/images/<?= $product['image']; ?>" alt="картинка"></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['category_id']; ?></td>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['brand']; ?></td>
                    <td><?= $product['tiny_desc']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td>
                        <a href="/product/edit/<?= $product['id']; ?>" class="fa fa-pencil"></a>
                        <form action="/product/delete/<?= $product['id']; ?>" method="post">
                            <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                                <i class="fa fa-remove"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</section>