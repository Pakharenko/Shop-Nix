<?php require_once 'layouts/header.php'; ?>
<?php require_once 'prod_list.php'; ?>
<?php require_once 'count_products.php'; ?>

    <main>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">

                        <div class="sidebar">
                            <?php require_once 'layouts/sidebar.php'; ?>
                        </div>
                        
                    </div>
                    <div class="col-md-10">

                        <div class="card-deck">

                            <?php foreach ($products as $key => $product) : ?>
                                <?php foreach ($count_products as $count_prod) : ?>

                                    <div class="col-md-4 block-products">
                                        <div class="card">
                                            <img class="card-img-top" src="../Shop-Nix/image/l.jpg"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title"><?= $product['title']; ?></h4>
                                                <p class="card-text"><?= $product['desc']; ?></p>
                                                <p class="card-text">Count products: <?= $count_prod; ?></p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" class="btn btn-success">Add to cart</button>
                                                <span class="product-price"><?= $product['price']; ?> <i
                                                        class="fa fa-money" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once 'layouts/footer.php'; ?>