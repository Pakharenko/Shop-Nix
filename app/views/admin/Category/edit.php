<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Редактировать</h3>
            </div>



            <form method="post" action=""  class="col-md-6">
                <?php foreach ($categories as $category) : ?>

                <div class="form-group">
                    <label>Название продукта</label>
                    <input type="text" name="name" class="form-control" value="<?= $category['name']; ?>">
                </div>

                <?php endforeach; ?>
                <button type="submit" name="submit" class="btn btn-primary">Редактировать</button>

            </form>

        </div>
    </div>


</section>