<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Редактирование пользователя</h3>
            </div>

<?php foreach ($users as $user) : ?>

            <form method="post" action="" class="col-md-6">

                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="name" class="form-control" value="<?= $user['name']; ?>">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" value="<?= $user['email']; ?>">
                </div>

                <div class="form-group">
                    <label>Пароль</label>
                    <input type="text" name="password" class="form-control" value="<?= $user['password']; ?>"> 
                </div>

                <div class="form-group">
                    <label>Права доступа</label>
                    <select name="is_admin" class="form-control">
                    	<option value="0" <?php if ($user['is_admin'] == 0) echo ' selected="selected"'; ?>>Пользователь</option>
                    	<option value="1" <?php if ($user['is_admin'] == 1) echo ' selected="selected"'; ?>>Админ</option>
                    </select>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Редактировать</button>

            </form>

<?php endforeach; ?>

        </div>
    </div>


</section>