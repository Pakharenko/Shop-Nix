<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Управление постами</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <a href="/admin/post/create" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Изображение</th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Мини-описание</th>
                    <th>Полное описание</th>
                    <th>Дата</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($posts as $post) :?>
                <tr>
                    <td><?= $post['id']; ?></td>
                    <td class="table-admin-image"><img src="/public/images/<?= $post['image']; ?>" alt="картинка"></td>
                    <td><?= $post['title']; ?></td>
                    <td><?= $post['author']; ?></td>
                    <td><?= $post['mini_desc']; ?></td>
                    <td><?= $post['description']; ?></td>
                    <td><?= $post['created_at']; ?></td>
                    <td>
                        <a href="/post/edit/<?= $post['id']; ?>" class="fa fa-pencil"></a>
                        <form action="/post/delete/<?= $post['id']; ?>" method="post">
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