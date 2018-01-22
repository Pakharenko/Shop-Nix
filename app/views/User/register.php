<h3 class="block-user-title">Регистрация</h3>

<?php //if ($reg_user): ?>
<!--    <p>Вы зарегистрированы!</p>-->
<?php //else: ?>
<?php //if (isset($errors) && is_array($errors)): ?>
<!--    <ul>-->
<!--        --><?php //foreach ($errors as $error): ?>
<!--            <li> - --><?php //echo $error; ?><!--</li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<?php //endif; ?>
<?php //endif; ?>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputName">Ваше имя:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш E-mail:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ваш пароль:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                           value="">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>

        <div class="col-md-6">

        </div>

    </div>
</div>

