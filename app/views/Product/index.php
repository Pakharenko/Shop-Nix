<div class="block-product">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
            <div class="col-md-4">
                <img class="card-img-top" src="/../public/images/<?= $product['image']; ?>" alt="<?= $product['name'];?>">
            </div>
            <div class="col-md-8">
                <h1><?= $product['name'];?></h1>
                <p><?= $product['description'];?></p>
                    <div class="product-price">
                        Цена: <?= $product['price']; ?> grn.
                    </div>
                    <div class="product-to-cart">
                        <a href="/cart/add/<?= $product['id']; ?>">В корзину</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="block-panels-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                               role="tab" aria-controls="home" aria-selected="true">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                               role="tab" aria-controls="profile" aria-selected="false">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                               role="tab" aria-controls="contact" aria-selected="false">History</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                             aria-labelledby="home-tab">


                        <?php if (!empty($user_auth)) : ?>
                             <form method="post" action="">
                                <div class="form-group">
                                    <label for="exampleInputName">Ваше имя:</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" value="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Ваш комментарий:</label>
                                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                                </div>
                                <button type="submit" name="submit_comment" class="btn btn-primary">Отправить</button>
                            </form>
                         <?php else : ?> 
                            <p class="text-danger"> Только зарегистрированные пользователи могут оставлять отзывы! </p>  
                         <?php endif ; ?>   

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel"
                             aria-labelledby="profile-tab">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. A at aut consequatur cupiditate debitis, dolores et
                            eum impedit magnam, magni minima non perspiciatis quasi quibusdam
                            recusandae similique velit voluptas voluptatem!
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel"
                             aria-labelledby="contact-tab">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Aut, ducimus esse inventore iste mollitia pariatur
                            recusandae totam unde. Commodi eligendi error ipsa iure nihil obcaecati
                            placeat similique suscipit! Ducimus, illum.
                        </div>
                    </div>


                    <div class="list-comment">

                    <?php if (!empty($get_comments)) : ?>
                        
                        <?php foreach ($get_comments as $comment) : ?>
                        <div class="block-comment-text">
                            <p><b>Имя</b>: <span class="text-primary"><?= $comment['author_name']; ?></span> <b>Дата</b>: <span class="text-primary"><?= $comment['created_at']; ?></span></p>
                            <p><?= $comment['text']; ?></p>
                        </div>
                        <?php endforeach ; ?>

                    <?php else : ?>  

                    <h4>Нет отзывов о данном товаре!</h4> 

                    <?php endif ;?>

                    </div>


                </div>
            </div>

