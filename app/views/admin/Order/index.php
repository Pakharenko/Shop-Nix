<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Управление заказами</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Номер телефона</th>
                    <th>Дата заказа</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($orders as $order) :?>
                    <tr>
                        <td><?= $order['id']; ?></td>
                        <td><?= $order['user_name']; ?></td>
                        <td><?= $order['user_phone']; ?></td>
                        <td><?= $order['created_at']; ?></td>
                        <td>
                            <?php if ($order['status'] == 0) : ?>
                                <span style="color: red; font-weight: bold">Новый заказ</span>
                            <?php else : ?>
                                <span class="text-success">Заказ оформлен</span>
                            <?php endif; ?>
                                
                        </td>
                        <td>
                            <a href="/order/view/<?= $order['id']; ?>" class="fa fa-eye"></a>
                            <a href="/order/edit/<?= $order['id']; ?>" class="fa fa-pencil"></a>
                            <form action="/order/delete/<?= $order['id']; ?>" method="post">
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