<!doctype html>
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
            background-color: #FF69B4; /* Pink */
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
                <p style="font-size: 20px;" class="my-3">danh sách đặt hàng</p>
            </div>

                <table class="table  table-striped">
                    <tr>
                        <td>STT</td>
                        <td>mã đơn hàng</td>
                        <td>tên người đặt</td>
                        <td>email</td>
                        <td>ngày đặt</td>
                        <td>trạng thái</td>
                        <td>thao tác</td>
                    </tr>
                    <?php foreach($list as $key => $detail): ?>
                    <tr>
                        <th><?=$key + 1?></th>
                        <th><?=$detail['Order_ID']?>  </th>
                        <th><?=$detail['recipient_name']?>  </th>
                        <th><?=$detail['recipient_email']?></th>
                        <th><?=$detail['order_date']?></th>
                        <th><?=$detail['statusname']?></th>
                        <th>
                            <a class="my-custom-button" href="<?= BASE_URL . '?act=detailOrder&id=' . $detail['id'] ?>">Xem</a>
                        </th>
                    </tr>
                    <?php endforeach ; ?>
                </table>
           
           


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