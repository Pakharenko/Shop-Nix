<h1>Редактировать данные</h1>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputName">Ваше имя:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" value="<?= $name_user_edit['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ваш E-mail:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           value="<?= $name_user_edit['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ваш пароль:</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                           value="<?= $name_user_edit['password']; ?>">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Редактировать">
            </form>
        </div>

        <div class="col-md-6">

        </div>

    </div>
</div>