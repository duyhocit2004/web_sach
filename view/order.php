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
                                    <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper section-padding">
            <div class="container">
                <form action="<?= BASE_URL.'?act=addOder'?>" method="POST">
                    <div class="row">
                        <!-- Checkout Billing Details -->
                        
                            <div class="col-lg-6">

                                        <div class="checkout-billing-details-wrap">
                                            <h5 class="checkout-title">Billing Details</h5>
                                            <div class="billing-form-wrap">
                                                    
                                                <div class="single-input-item">
                                                        <label for="email" class="required">tên người nhận</label>
                                                        <input type="text"placeholder="tên người nhận"  value="<?=$user1['name_user']?>" name="name_user" required />
                                                    </div>

                                                    <div class="single-input-item">
                                                        <label for="com-name">email</label>
                                                        <input type="text" id="com-name" name="recipient_email" value="<?=$user1['email']?>" placeholder="email" />
                                                    </div>

                                                    <div class="single-input-item">
                                                        <label for="street-address" class="required mt-20">số điện thoại</label>
                                                        <input type="text" id="street-address" name="recipient_phone"  value="<?=$user1['phone']?>" placeholder="09123123..." required />
                                                    </div>
                                                    
                                                    <div class="single-input-item">
                                                        <label for="street-address" class="required mt-20">địa chỉ</label>
                                                        <input type="text" id="street-address" name="recipient_address" value="<?=$user1['address']?>"   placeholder="địa chỉ" required />
                                                    </div>

                                                    <div class="single-input-item">
                                                        <label for="ordernote">ghi chú</label>
                                                        <textarea name="ordernote" name="note" id="ordernote"  cols="30" rows="3" placeholder="Ghi chú về đơn hàng của bạn, ví dụ ghi chú đặc biệt về việc giao hàng."></textarea>
                                                    </div>
                                                
                                            
                                                </div>
                                            </div>
                                        </div>

                                    <!-- Order Summary Details -->
                                    <div class="col-lg-6">
                                        <div class="order-summary-details">
                                            <h5 class="checkout-title"> đơn hàng</h5>
                                            <div class="order-summary-content">
                                                <!-- Order Summary Table -->
                                                <div class="order-summary-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>sản phẩm</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php var_dump($_SESSION['cart']) ?>
                                                            <?php 
                                                            $tong = 0;
                                                            foreach($_SESSION['cart'] as $products): ?>

                                                                <tr>
                                                                    <td><?=$products['book_name']?><strong> ×  <?=$products['quality']?></strong></td>
                                                                    
                                                                    <td><?=formatPrice($products['price'])?></td>
                                                                </tr>
                                                            <?php
                                                            $tong += $products['price'] * $products['quality'];
                                                        endforeach; ?>
                                                        </tbody>
                                                        <tfoot>
                                                            
                                                            <tr>
                                                                <td>tổng tiền sản phẩm</td>
                                                                <td><strong><?=$tong?></strong></td>
                                                            
                                                            </tr>
                                                            <tr>
                                                                <?php

                                                                $phivanchuyen = 2 
                                                                
                                                                ?>
                                                                <td>tổng tiền</td>
                                                                <?php
                                                                $tongphi = 0;
                                                                $tongphi =$tong * ($phivanchuyen/100);
                                                                ?>
                                                                <input type="hidden" name="sum_price" value="<?= formatPrice($tong+$tongphi )?>">
                                                                <td><strong><?= formatPrice($tong+$tongphi ) .'đ'?></strong></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <!-- Order Payment Method -->
                                                <div class="order-payment-method">
                                                    <div class="single-payment-method show">
                                                        <div class="payment-method-name">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="cashon" name="payment_method" value="1" class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="cashon">thanh toán khi nhận hàng</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-payment-method">
                                                        <div class="payment-method-name">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="directbank" name="payment_method" value="2" class="custom-control-input" />
                                                                <label class="custom-control-label" for="directbank">Thẻ tín dụng/ghi nợ</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-payment-method">
                                                        <div class="payment-method-name">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="checkpayment" name="payment_method" value="3" class="custom-control-input" />
                                                                <label class="custom-control-label" for="checkpayment">ví điện tử</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                    <div class="summary-footer-area my-4">
                                                        <button type="submit" class="btn btn-sqr">đặt hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                    </div>          
                                 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout main wrapper end -->
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