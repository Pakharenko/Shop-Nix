<section class="content">
	<div class="box">
		<div class="box-body">
			<div class="box-header">
						<?php foreach ($orders as $order) : ?>
				<h3 class="box-title">Редактировать заказ № <?= $order['id']?></h3>
			</div>



			<form method="post" action=""  class="col-md-6">
		

					<div class="form-group">
						<label>Имя</label>
						<input type="text" name="user_name" class="form-control" value="<?= $order['user_name']; ?>">
					</div>

					<div class="form-group">
						<label>Телефон</label>
						<input type="text" name="user_phone" class="form-control" value="<?= $order['user_phone']; ?>">
					</div>

					<div class="form-group">
						<label>Комментарий к заказу</label>
						<input type="text" name="user_comment" class="form-control" value="<?= $order['user_comment']; ?>">
					</div>

					<div class="form-group">
						<label>Дата заказа</label>
						<input type="text" name="created_at" class="form-control" value="<?= $order['created_at']; ?>">
					</div>

					<div class="form-group">
						<label>Статус заказа</label>
						<select name="status">
							<option value="0" <?php if ($order['status'] == 0) echo ' selected="selected"'; ?>>Новый заказ</option>
							<option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Заказ оформлен</option>
						</select>
					</div>

				<?php endforeach; ?>
				<button type="submit" name="submit" class="btn btn-primary">Редактировать</button>

			</form>

		</div>
	</div>


</section>