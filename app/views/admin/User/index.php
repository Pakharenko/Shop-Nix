<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Управление пользователями</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Роль</th>
                    <th>Дата регистрции</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($users as $user) :?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <?php if ($user['is_admin'] == 0): ?>
                            Пользователь
                        <?php else: ?>
                            Админ
                        <?php endif; ?>
                        
                    </td>
                    <td><?= $user['created_at']; ?></td>
                    <td>
                        <a href="/user/edit/<?= $user['id']; ?>" class="fa fa-pencil"></a>
                        <form action="/user/delete/<?= $user['id']; ?>" method="post">
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