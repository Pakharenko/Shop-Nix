<section class="content">
	<div class="box">
		<div class="box-body">
			<div class="box-header">
				
				<h3 class="box-title">Просмотр заказа</h3>
			</div>


			<?php foreach ($view_order as $order) : ?>

				<div style="margin-left: 20px;">

					<p><b>Номер заказа: </b> № <?= $order['id']; ?></p>
					<p><b>Имя: </b><?= $order['user_name']; ?></p>
					<p><b>Телефон: </b><?= $order['user_phone']; ?></p>
					<p><b>Комментарий: </b><?= $order['user_comment']; ?></p>
					<p><b>Дата: </b><?= $order['created_at']; ?></p>
					<p><b>Статус: </b>
						<?php if ($order['status'] == 0) :?>
							Новый заказ
						<?php else : ?>
							Заказ оформлен
						<?php endif; ?>
					</p>

				<?php endforeach; ?>

				<h4 class="text-primary">Товар в заказе:</h4>

				<table class="table">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Имя продукта</th>
							<th scope="col">Брэнд</th>
							<th scope="col">Цена</th>
							<th scope="col">Кол-во</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($products as $product) : ?>
							<tr>
								<th scope="row"><?= $product['id']; ?></th>
								<td><?= $product['name']; ?></td>
								<td><?= $product['brand']; ?></td>
								<td><?= $product['price']; ?></td>
								<td><?= $product_count[$product['id']]; ?></td>
							</tr>
						<?php endforeach; ?>

					</tbody>
				</table>

			</div>



		</div>
	</div>

</section>