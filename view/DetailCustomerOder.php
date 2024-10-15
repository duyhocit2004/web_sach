
</html><!doctype html>
<html class="no-js" lang="en">
<?php require_once "./view/playout2/head.php" ?>

<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:03 GMT -->
    <style>
        *{
            margin : 0;
            padding :0;
            
        }
        .main{
            border-radius: 10;

        }
        .mr{
            background-color: burlywood; 
            border-radius: 10;
        }
        .my-custom-button {
            background-color:green ; /* Pink */
            border: none;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
<head>


</head>

<body>
    <!-- Start Header Area -->
    <?php require_once "./view/playout2/header.php" ?>
    <!-- end Header Area -->

   <main class="container"class="main">
    <div class="row">
            <div class="rounded-top mr">
                <p style="font-size: 20px;" class="my-3">chi tiết đơn đặt hàng</p>
            </div>
            <div class="my-3 pd-2">
                <div class="py-2">
                    <p><strong>Mã Sản Phẩm :</strong> <?=$listdetail['Order_ID']?></p>
                </div>
                <div class="py-2">
                    <p><strong>tên người nhận :</strong> <?=$listdetail['recipient_name']?></p>
                </div>
                <div class="py-2">
                    <p><strong>email :</strong> <?=$listdetail['recipient_email']?></p>
                </div>
                <div class="py-2">
                    <p><strong>số điện thoại :</strong> <?=$listdetail['recipient_phone']?></p>
                </div>
                <div class="py-2">
                    <p><strong>ngày đặt :</strong><?=$listdetail['recipient_address']?></p>
                </div>
                <div class="py-2">
                    <p><strong>ghi chú :</strong><?=$listdetail['note']?></p>
                </div>
                <div class="py-2">
                    <p><strong>phương thức thanh toán :</strong> <?=$listdetail['payment_method_name']?></p>
                </div>
                <div class="py-2">
                    <p><strong>trạng thái :</strong><?=$listdetail['payment_status']?></p>
                </div>
                
                <table class="table  table-striped">
                <tr>
                    <td>STT</td>
                    <td>ảnh sản phẩm</td>
                    <td>tên sản phẩm</td>
                    <td>số lượng</td>
                    <td>tổng tiền</td>
                </tr>
                    <?php foreach($listproducts as $key=>$products): ?>
                <tr>
                    <th><?=$products['id']?></th>
                    <th><img src="<?=$products['image']?>" width="100px" alt=""></th>
                    <th><?=$products['book_name']?></th>
                    <th><?=$products['quantity']?></th>
                    <th><?=$products['sum_price']?></th>
                </tr>
                    <?php endforeach;?>
            </table>
                <div>
                        <a class="my-custom-button" href="?act=CustomerOder">trở lại</a>
                </div>
            </div>

   </div>
       
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