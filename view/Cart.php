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
                                <table class="table ">
                                    <thead class="back">
                                        <tr class="back">
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
                                            // echo $_SESSION['cart']['name'];
                                        $tienship = 2;
                                        $tongtien = 0;
                                            if(isset($_SESSION['cart'])){
                                            // var_dump($_SESSION['cart']);
                                                foreach($_SESSION['cart'] as $product): ?> 
                                        <tr>
                                            <td class="pro-thumbnail"><a href="<?=BASE_URL . '?act=cart-product&id='.$product['product_id']?>">
                                            <img class="img-fluid" src="<?=BASE_URL . $product['image']  ?>" alt="" /></a></td>
                                            <td class="pro-title"><a href="#"><?=$product['book_name']?></a></td>
                                            <td class="pro-price"><span><?=formatPrice($product['price'])?><?="đ"?></span></td>
                                            <td class="pro-quantity">

                                                <div class="pro-qty">
                                                    <input type="text" class="quanlity" value="<?=$product['quality']?>" />
                                                </div>

                                            </td>
                                            <td class="pro-subtotal"><span><?php 
                                            $sum = $product['price'] * $product['quality'] ;
                                            $tongtien += $sum;
                                            echo  formatPrice($sum ). ' đ';
                                         
                                            
                                            ?></span></td>
                                            <td class="pro-remove"><a href="<?=BASE_URL . '?act=DeleteProductOnCart&id='.$product['product_id']?>"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                            <?php endforeach;}else{?>
                                            <?php }?>
                                        
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
                                <a href="<?=BASE_URL.'?act=order'?>" class="btn btn-sqr d-block back">tiến hành thanh toán</a>
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
</html>