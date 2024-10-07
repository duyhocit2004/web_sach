<!doctype html>
<html class="no-js" lang="zxx">
<!doctype html>
<html class="no-js" lang="en">
<?php require_once "./view/playout2/head.php" ?>

<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:03 GMT -->

<head>


</head>

<body>
    <!-- Start Header Area -->
    <?php require_once "./view/playout2/header.php" ?>
    <!-- end Header Area -->

    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kết quả tìm kiếm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <!-- sidebar area start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="sidebar-wrapper">
                            <!-- single sidebar start -->

                            <div class="sidebar-single">

                                <h5 class="sidebar-title">Thể Loại</h5>
                                <?php foreach ($listGenres as $key => $genres): ?>

                                    <div class="sidebar-body">
                                        <ul class="shop-categories">
                                            <li><a href="#"><?= $genres['name'] ?></a></li>
                                            <hr>
                                        </ul>

                                    </div>
                                <?php endforeach ?>

                            </div>
                            <!-- single sidebar end -->


                        </aside>
                    </div>
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view"
                                                    data-bs-toggle="tooltip" title="Grid View"><i
                                                        class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view" data-bs-toggle="tooltip"
                                                    title="List View"><i class="fa fa-list"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item list wrapper start -->
                            <div class="shop-product-wrap grid-view row mbn-30">


                                <?php if (!empty($listSanPham)): ?>
                                    <ul>
                                        <?php foreach ($listSanPham as $product): ?>

                                            <div class="col-md-4 col-sm-6">

                                                <!-- product grid start -->
                                                <div class="product-item">

                                                    <figure class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img class="pri-img" src="<?= BASE_URL . $product['image'] ?>"
                                                                alt="product">
                                                            <img class="sec-img" src="<?= BASE_URL . $product['image'] ?>"
                                                                alt="product">
                                                        </a>

                                                        <div class="product-badge">
                                                            <div class="product-label new">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <div class="cart-hover">
                                                            <button class="btn btn-cart">add to cart</button>
                                                        </div>
                                                    </figure>
                                                    <div class="product-caption text-center">
                                                        <h6 class="product-name">
                                                            <a href="<?= BASE_URL . $product['book_name'] ?>"><?= $product['book_name'] ?>
                                                            </a>
                                                        </h6>
                                                        <div class="price-box">
                                                            <span
                                                                style="color: red"><?= formatPrice($product['price']) . 'đ'; ?>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- product grid end -->

                                                <!-- product list item end -->
                                                <div class="product-list-item">
                                                    <figure class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img class="pri-img" src="<?= BASE_URL . $product['image'] ?>"
                                                                alt="product">
                                                            <img class="sec-img" src="<?= BASE_URL . $product['image'] ?>"
                                                                alt="product">
                                                        </a>
                                                        <div class="product-badge">
                                                            <div class="product-label new">
                                                                <span>new</span>
                                                            </div>

                                                        </div>

                                                        <div class="cart-hover">
                                                            <button class="btn btn-cart">add to cart</button>
                                                        </div>
                                                    </figure>
                                                    <div class="product-content-list">

                                                        <hlass="product-name">
                                                            <a href="<?= BASE_URL . $product['book_name'] ?>"><?= $product['book_name'] ?>
                                                            </a>
                                                            <div class="price-box">
                                                                <span
                                                                    style="color: red"><?= formatPrice($product['price']) . 'đ'; ?>
                                                            </div>
                                                            <p <?= BASE_URL . $product['description'] ?>>
                                                                <?= $product['description'] ?>
                                                            </p>
                                                    </div>
                                                </div>
                                                <!-- product list item end -->
                                            </div>


                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p>Không tìm thấy sản phẩm nào.</p>
                                <?php endif; ?>




                            </div>
                            <!-- product item list wrapper end -->

                            <!-- start pagination area -->
                            <!-- <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                    <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!-- end pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
    <?php require_once "./view/playout2/footer.php" ?>
    <!-- offcanvas mini cart end -->

    <!-- JS
============================================ -->
    <?php require_once "./view/playout2/js.php" ?>

</body>

<!-- Mirrored from htmldemo.net/corano/corano/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:59 GMT -->

</html>