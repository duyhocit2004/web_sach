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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Chi tiết đơn hàng : <?=$list['Order_ID']?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="alert alert-<?=$colorAlert ?>" role="alert">
                Đơn hàng :<?=$list['payment_status'] ?>
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
              
              <!-- info row -->
              <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-12 my-5 mx-5">
                  <h4>
                  <i class="fas fa-user my-2"></i> <?= $list['recipient_name']?>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
                <div class="col-sm-4 invoice-col my-3">
                  <address>
                    <strong><?= $list['recipient_name']?></strong><br>
                    <strong>địa điểm : </strong><?= $list['recipient_address']?><br>
                    <strong>id người dùng : </strong><?= $list['user_id']?><br>
                    <strong>Phone : </strong> <?= $list['recipient_phone']?><br>
                    <strong>Email : </strong> <?= $list['recipient_email']?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col my-3">
                  <b>ngày đặt : </b><?= date('d-m-Y',strtotime($list['order_date']))?><br>
                  <b>ghi chú : </b><?= $list['note']?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>ảnh</th>
                        <th>sản phẩm</th>
                        <th>số lượng</th>
                        <th>giá sản phẩm</th>
                        <th>thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list2 as $key=>$as):?>
                    <tr>
                        <th><?= $key +1?></th>
                        <th><img width="50px" src="<?= BASE_URL.$as['image']?>" alt=""></th>
                        <th><?=$as['book_name']?></th>

                        <th><?=$as['quantity']?></th>
                        <th><?=formatPrice($as['unit_price'])?></th>
                        <th><?= formatPrice($as['sum_price'])?></th>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead"><?= date('d-m-Y',strtotime($list['order_date']))?></p>

                  <div class="table-responsive">

                    <table class="table">
                      <tr>
                        <th style="width:50%">tiền sản phẩm :</th>
                        <td><?=formatPrice($tongtienSP)?></td>
                      </tr>
                      <tr>
                        <th>thuế (2%)</th>
                        <td><?= formatPrice($thue ) ?></td>
                      </tr>
                      <tr>
                        <th>thuế ship hàng :</th>
                        <td><?= formatPrice($shiphang)?></td>
                      </tr>
                      <tr>
                        <th>tổng tiền:</th>
                        <td><?=formatPrice($tong )?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row">
            <div class="col text-center">
                <a href="<?= BASE_URL_ADMIN . '?act=don-hang' ?>">
                    <button class="btn btn-warning">quay lại</button>
                </a>
                <a href="<?= BASE_URL_ADMIN . '?act=from-sua-don-hang&id=' . $list['id'] ?>">
                    <button class="btn btn-danger">chỉnh sửa</button>
                </a>
            </div>
        </div>
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