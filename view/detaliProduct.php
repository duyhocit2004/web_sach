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
                                        <div class="manufacturer-name">
                                            <a href="product-details.html">HasTech</a>
                                        </div>
                                        <h3 class="product-name" name="name"><?=$sanpham['book_name']?></h3>
                                        <div class="ratings d-flex">
                                            <span><i class="fa fa-star-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular"><?=formatPrice($sanpham['price'])?> đ</span>
                                        </div>
                                        <h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
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
                                                    <button class="btn btn-cart2">thêm giỏ hàng</button>
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
                                            <li>
                                                <a class="active" data-bs-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_three">reviews (1)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                        fringilla augue nec est tristique auctor. Ipsum metus feugiat
                                                        sem, quis fermentum turpis eros eget velit. Donec ac tempus
                                                        ante. Fusce ultricies massa massa. Fusce aliquam, purus eget
                                                        sagittis vulputate, sapien libero hendrerit est, sed commodo
                                                        augue nisi non neque.Cras neque metus, consequat et blandit et,
                                                        luctus a nunc. Etiam gravida vehicula tellus, in imperdiet
                                                        ligula euismod eget. Pellentesque habitant morbi tristique
                                                        senectus et netus et malesuada fames ac turpis egestas. Nam
                                                        erat mi, rutrum at sollicitudin rhoncus</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td>black, blue, red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>size</td>
                                                            <td>L, M, S</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab_three">
                                                <form action="#" class="review-form">
                                                    <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="assets/img/about/avatar.jpg" alt="">
                                                        </div>
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <div class="post-author">
                                                                <p><span>admin -</span> 30 Mar, 2019</p>
                                                            </div>
                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                                amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                                vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                                iaculis, dui congue placerat pretium, augue erat
                                                                accumsan lacus</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span
                                                                    class="text-danger">*</span>
                                                                Your Name</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span
                                                                    class="text-danger">*</span>
                                                                Your Email</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span
                                                                    class="text-danger">*</span>
                                                                Your Review</label>
                                                            <textarea class="form-control" required></textarea>
                                                            <div class="help-block pt-10"><span
                                                                    class="text-danger">Note:</span>
                                                                HTML is not translated!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span
                                                                    class="text-danger">*</span>
                                                                Rating</label>
                                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                            <input type="radio" value="1" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="2" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="3" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="4" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="5" name="rating" checked>
                                                            &nbsp;Good
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="btn btn-sqr" type="submit">Continue</button>
                                                    </div>
                                                </form> <!-- end of review-form -->
                                            </div>
                                        </div>
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