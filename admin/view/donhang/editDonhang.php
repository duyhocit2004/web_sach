<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../admin/view/playout/head.php' ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once '../admin/view/playout/nav.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once '../admin/view/playout/sidebar.php' ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Sửa thông tin đơn hàng : <?= $list['Order_ID']?></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?= BASE_URL_ADMIN . '?act=sua-don-hang' ?>" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tên tài khoản</label>
                                            <input type="text" class="form-control" name="name_user" value="<?= $list['name_user'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

                                        <div class="form-group">
                                            <label>tên khách hàng</label>
                                            <input type="text" class="form-control" name="recipient_name" value="<?= $list['recipient_name'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="text" class="form-control" name="recipient_email" value="<?= $list['recipient_email'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>số điện thoại</label>
                                            <input type="text" class="form-control" name="recipient_phone" value="<?= $list['recipient_phone'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

                                        <div class="form-group">
                                            <label>địa chỉ</label>
                                            <input type="text" class="form-control" name="recipient_address" value="<?= $list['recipient_address'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

                                        <div class="form-group">
                                            <label>ngày mua</label>
                                            <input type="date" class="form-control" name="order_date" value="<?= $list['order_date'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

    
                                        <div class="form-group">
                                            <label>ghi chú</label>
                                            <input type="text" class="form-control" name="note" value="<?= $list['note'] ?>"
                                                placeholder="Nhập tên tác giả">
                                        </div>

                                        <div class="form-group">
                                           <label>phương thức thanh toán</label>
                                           <select name="payment_method_name" id="" class="form-control">
                                            <?php foreach($method as $as) : ?>
                                            <option   value="<?= $as['id'] ?>"><?= $as['payment_method_name'] ?></option>
                                            <?php endforeach; ?>
                                           </select>
                                        </div>

                                        <div class="form-group">
                                           <label>phương thức thanh toán</label>
                                           <select name="payment_status" id="" class="form-control">
                                           <?php foreach($status as $as) : ?>
                                            <option  class="form-control" value="<?= $as['id'] ?>"><?= $as['payment_status'] ?></option>
                                            <?php endforeach; ?>
                                           </select>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->


        </div>
         <!-- footer -->
 <?php require_once '../admin/view/playout/footer.php' ?>
    <!-- end_footer -->
 
<!-- jQuery -->
<?php require_once '../admin/view/playout/js.php' ?>

</body>

</html>