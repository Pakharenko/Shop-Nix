<?php require_once 'layouts/header.php';?>

<main>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                    <div class="sidebar">
                        <?php require_once 'layouts/sidebar.php';?>
                    </div>


                </div>
                <div class="col-md-10">

                    <div class="cart">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><img class="card-img-top" src="../Shop-Nix/image/l.jpg"
                                                     alt="Card image cap"></th>
                                <td>Lenovo</td>
                                <td>1</td>
                                <td>170.00</td>
                                <td><a class="delete" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><img class="card-img-top" src="../Shop-Nix/image/l.jpg"
                                                     alt="Card image cap"></th>
                                <td>Lenovo</td>
                                <td>1</td>
                                <td>170.00</td>
                                <td><a class="delete" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><img class="card-img-top" src="../Shop-Nix/image/l.jpg"
                                                     alt="Card image cap"></th>
                                <td>Lenovo</td>
                                <td>1</td>
                                <td>170.00</td>
                                <td><a class="delete" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="count-price-cart">
                            <div class="container">
                                <p>Count: <span>510.00 grn</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php require_once 'layouts/footer.php';?>