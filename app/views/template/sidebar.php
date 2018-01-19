<h3>Категории</h3>
<?= $title;?>
<ul class="sidebar-nav">
    <?php foreach ($categories as $category) :?>
        <li><a href=""><?= $category['name']; ?></a></li>
    <?php endforeach;?>
    <!--                            <li>-->
    <!---->
    <!--                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"-->
    <!--                                   aria-expanded="false">-->
    <!--                                    Xiaomi-->
    <!--                                </a>-->
    <!--                                <div class="dropdown-menu">-->
    <!--                                    <a class="dropdown-item" href="#">Action</a>-->
    <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
    <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
    <!--                                    <a class="dropdown-item" href="#">Separated link</a>-->
    <!--                                </div>-->
    <!---->
    <!---->
    <!--                            </li>-->
</ul>

<h3>Фильтры</h3>