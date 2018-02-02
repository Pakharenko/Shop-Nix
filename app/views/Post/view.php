<h1>Страница поста</h1>

<div class="block-post-list">

    <?php foreach ($post as $item) : ?>
        <div class="card">
            <img src="/public/images/<?= $item['image'];?>" alt="Картинка">
            <div class="card-body">
                <h4 class="card-title"><?= $item['title']; ?></h4>
                <p class="card-text"> <?= $item['description']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>

</div>