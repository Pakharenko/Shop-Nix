<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Добавить продукт</h3>
            </div>

            <form method="post" action="/admin/category/create" class="col-md-6">

                <div class="form-group">
                    <label>Название категории</label>
                    <input type="text" name="name" class="form-control">
                </div>


<!--                 <div class="form-group">
                    <label>Дочерняя категория</label>
                    <input type="text" name="price" class="form-control">
                </div> -->


                <button type="submit" name="submit" class="btn btn-primary">Добавить</button>

            </form>


        </div>
    </div>


</section>