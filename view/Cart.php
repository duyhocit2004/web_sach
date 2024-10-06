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
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">ánh sản phẩm</th>
                                            <th class="pro-title">tên sản phẩm</th>
                                            <th class="pro-price">giá</th>
                                            <th class="pro-quantity">số lượng</th>
                                            <th class="pro-subtotal">tổng</th>
                                            <th class="pro-remove">thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $tienship = 2;
                                        $tongtien = 0;
                                        foreach($chitiet as $detail): ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="<?=BASE_URL . '?act=detail-product&id='.$detail['product_id']?>"><img class="img-fluid" src="<?=$detail['image']?>" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#"><?=$detail['book_name']?></a></td>
                                            <td class="pro-price"><span><?=formatPrice($detail['price'])?><?="đ"?></span></td>
                                            <td class="pro-quantity">

                                                <div class="pro-qty">
                                                    <input type="text" class="quanlity" value="<?=$detail['quantity']?>" />
                                                </div>

                                            </td>
                                            <td class="pro-subtotal"><span><?php 
                                            $sum = $detail['price'] * $detail['quantity'] ;
                                            $tongtien += $sum;
                                            echo  formatPrice($sum ). ' đ';
                                         
                                            
                                            ?></span></td>
                                            <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h6>Cart Totals</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><?=formatPrice($tongtien) . 'đ'?></td>
                                            </tr>
                                            <tr>
                                                <?php 
                                                
                                                $price = $tongtien * ($tienship/100);
                                                ?>
                                                <td>phí giao hàng(2%)</td>
                                                <td><?=formatPrice( $price) . 'đ'?></td>
                                            </tr>
                                            <tr>
                                                <td>tổng hàng</td>
                                                <td><?=formatPrice( $tongtien + $price) . 'đ'?></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                                <a href="<?=BASE_URL.'?act=order'?>" class="btn btn-sqr d-block">tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
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
 <!-- Modernizer JS -->
 <script src="assets/clients/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/clients/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/clients/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS -->
    <script src="assets/clients/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/clients/js/plugins/countdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/clients/js/plugins/nice-select.min.js"></script>
    <!-- jquery UI JS -->
    <script src="assets/clients/js/plugins/jqueryui.min.js"></script>
    <!-- Image zoom JS -->
    <script src="assets/clients/js/plugins/image-zoom.min.js"></script>
    <!-- Images loaded JS -->
    <script src="assets/clients/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- mail-chimp active js -->
    <script src="assets/clients/js/plugins/ajaxchimp.js"></script>
    <!-- contact form dynamic js -->
    <script src="assets/clients/js/plugins/ajax-mail.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="assets/clients/js/plugins/google-map.js"></script>
    <!-- Main JS -->
    <script src="assets/clients/js/main.js"></script>
    <script src="assets/clients/js/main2.js"></script>

</html>