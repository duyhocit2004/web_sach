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
                                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Sản Phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <form action="<?=BASE_URL .'?act=addtocart&id='. $sanpham['id']?>" method="POST">
                            <!-- <input type="hidden" value="<?= $sanpham['id'] ?>" name="product"> -->
                        <div class="product-details-inner">  
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                    

                                        <div class="pro-large-img img-zoom">
                                            
                                            <img src="<?= $sanpham['image']?>"
                                                alt="product-details" />
                                        </div>
                                        
                                    
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                    
                                        <h3 class="product-name" name="name"><?=$sanpham['book_name']?></h3>
                                        <div class="manufacturer-name">
                                        <p>thể loại : <?=$sanpham['genres_name']?></p>
                                        </div>

                                        <div class="price-box">
                                            <span class="price-regular"><?=formatPrice($sanpham['price'])?> đ</span>
                                        </div>
                                        <h6 class="offer-text"><strong>Tác Giả : </strong><?=$sanpham['author_name']?></h>
                                        <div class="product-countdown" data-countdown="2024/12/20"></div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span><?=$sanpham['quantity']?> in stock </span>
                                        </div>
                                        <p class="pro-desc"><?=$sanpham['description']?></p>
                                        <div class="quantity-cart-box d-flex align-items-center">

                                        <!-- thêm vô giỏ hàng -->
                                        
                                                <div class="quantity ">
                                                <div class="pro-qty my-4"><input type="text" value="1" name="quantity"></div>
                                                </div>
                                                <div class="action_link">
                                                    <button class="btn btn-cart2 back">thêm giỏ hàng</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="useful-links">
                                            <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i>compare</a>
                                            <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="pe-7s-like"></i>wishlist</a>
                                        </div>
                                        <div class="like-icon">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li class="back">
                                                <a class=" " data-bs-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_three">reviews (1)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- related products area start -->
        <section class="related-products section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Sản Phẩm Liên Quan</h2>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                            <!-- product item start -->
                             <?php foreach ($listProducts as $key => $list):?>
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="<?= BASE_URL . '?act=detail-product&id='.$list['id'] ?>">
                                            <img class="pri-img" src="<?=$list['image']?>" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-caption text-center">
                                    
                                        <h6 class="product-name">
                                            <a href="product-details.html"><?=$list['book_name']?></a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular"><?= formatPrice($list['price'])?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ;?>
                            <!-- product item end -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related products area end -->
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


<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:43 GMT -->

</html>