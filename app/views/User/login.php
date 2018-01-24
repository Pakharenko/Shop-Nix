
<h3 class="block-user-title">Вход на сайт</h3>

<?php if (isset($errors) && is_array($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <p class="text-danger"> - <?php echo $error; ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш E-mail:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?= $email; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ваш пароль:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?= $password?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>

        <div class="col-md-6">

        </div>

    </div>
</div>
