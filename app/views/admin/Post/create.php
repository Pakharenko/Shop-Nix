<section class="content">
	<div class="box">
		<div class="box-body">
			<div class="box-header">
				<h3 class="box-title">Добавить пост</h3>
			</div>

			<form method="post" action="/admin/post/create" class="col-md-6" enctype="multipart/form-data">

				<div class="form-group">
					<label>Название поста</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label>Автор</label>
					<input type="text" name="author" class="form-control">
				</div>

				<div class="form-group">
					<label>Изображение</label>
					<input name="image" type="file" class="form-control-file">
				</div>

				<div class="form-group">
					<label>Короткое описание</label>
					<textarea type="text" name="mini_desc" class="form-control"> </textarea>
				</div>

				<div class="form-group">
					<label>Полное описание</label>
					<textarea type="text" name="description" class="form-control"> </textarea>
				</div>

				<div class="form-group">
					<label>Дата</label>
					<input type="text" name="date" class="form-control">
				</div>


				<button type="submit" name="submit" class="btn btn-primary">Добавить</button>

			</form>


		</div>
	</div>


</section>