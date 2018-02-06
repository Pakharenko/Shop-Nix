<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Управление категориями</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <a href="/admin/category/create" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Дочерняя категория</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($categories as $category) :?>
                    <tr>
                        <td><?= $category['id']; ?></td>
                        <td><?= $category['name']; ?></td>
                        <td><?= $category['parent_id']; ?></td>

                        <td>
                            <a href="/category/edit/<?= $category['id']; ?>" class="fa fa-pencil"></a>
                            <form action="/category/delete/<?= $category['id']; ?>" method="post">
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