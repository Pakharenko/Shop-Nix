<?php require_once 'layouts/header.php';?>

<main>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                    <div class="sidebar">
                        <h3>Categories</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Samsung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">lenovo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Computers</a>
                                <ul>
                                    <li><a href="">Asus</a></li>
                                    <li><a href="">Aser</a></li>
                                    <li><a href="">Lenovo</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sony</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-md-10">

                    <div class="block-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="../Shop-Nix/image/l.jpg" alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <h1>Name Products</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti dolorum
                                        eos saepe sit tempore tenetur ullam? Animi distinctio ea illum iusto
                                        laborum magnam necessitatibus, quasi veritatis. Illo, nemo, repudiandae!
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at autem
                                        corporis
                                        eaque earum eos est excepturi fugit ipsum modi nam natus numquam officiis,
                                        omnis,
                                        repellendus ullam vero voluptate voluptates!</p>

                                    <button type="button" class="btn btn-success">Add to cart</button>
                                    <span class="product-price">Price: 142.55 <i class="fa fa-money"
                                                                                 aria-hidden="true"></i></span>
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

                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Name</label>
                                                        <input type="email" class="form-control" id="exampleInputName"
                                                               placeholder="Enter email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                               placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Example
                                                            textarea</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                  rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>

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
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require_once 'layouts/footer.php';?>