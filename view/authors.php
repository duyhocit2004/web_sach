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
                                    <li class="breadcrumb-item active" aria-current="page">Tác Giả</li>
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
                <div class="">
                    <!-- shop main wrapper start -->
                    <div class="">
                        <div class="">

                            <!-- product item list wrapper start -->
                            <div class="shop-product-wrap grid-view row mbn-30">
                                
                                <?php foreach ($listAuthors as $key => $author): ?>
                                    <!-- product single item start -->
                                    <div class="col-md-4 col-sm-6">

                                        <!-- product grid start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="#">
                                                    <img class="pri-img" src="<?= BASE_URL . $author['img_author'] ?>"
                                                        alt="author" >
                                                    <img class="sec-img" src="<?= BASE_URL . $author['img_author'] ?>"
                                                        alt="author">
                                                </a>
                                              
                                            </figure>
                                            <div class="product-caption text-center">
                                                <h6 class="product-name">
                                                    <a href="#"><?= $author['name'] ?>
                                                    </a>
                                                </h6>
                                                <p>
                                                    <?= $author['bio'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- product grid end -->
                                    </div>
                                <?php endforeach ?>


                            </div>
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