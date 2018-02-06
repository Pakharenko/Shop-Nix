<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="box-header">
                <h3 class="box-title">Редактировать пост</h3>
            </div>

<?php foreach ($posts as $post) : ?>

            <form method="post" action="/admin/post/create" class="col-md-6" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Название поста</label>
                    <input type="text" name="title" class="form-control" value="<?= $post['title']; ?>">
                </div>

                <div class="form-group">
                    <label>Автор</label>
                    <input type="text" name="author" class="form-control" value="<?= $post['author']; ?>">
                </div>

                <div class="form-group">
                    <label>Изображение</label>
                    <img src="/public/image/<?= $post['image']?>" alt="<?= $post['title']; ?>">
                    <input name="image" type="file" class="form-control-file" value="<?= $post['image']; ?>">
                </div>

                <div class="form-group">
                    <label>Короткое описание</label>
                    <input type="text" name="mini_desc" class="form-control" value="<?= $post['mini_desc']; ?>"> 
                </div>

                <div class="form-group">
                    <label>Полное описание</label>
                    <input type="text" name="description" class="form-control" value="<?= $post['description']; ?>"> 
                </div>

                <div class="form-group">
                    <label>Дата</label>
                    <input type="text" name="date" class="form-control" value="<?= $post['date']; ?>">
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Редактировать</button>

            </form>

<?php endforeach; ?>

        </div>
    </div>


</section>