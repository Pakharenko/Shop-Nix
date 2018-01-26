<h1>Блог</h1>
<div class="block-post-list">

        <?php foreach ($posts as $post) : ?>
    <div class="card">
        <img src="" alt="Картинка">
        <div class="card-body">
            <h4 class="card-title"><?= $post['title']; ?></h4>
            <p class="card-text"> <?= $post['mini-desc']; ?></p>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                <?= $post['date']; ?> </span>
            <span> <i class="fa fa-user" aria-hidden="true"></i>
                <?= $post['author']; ?></span>
            <a href="/post/view/<?= $post['id']; ?>">Подробнее...</a>
        </div>
        </div>
            <?php endforeach; ?>
    </div>

